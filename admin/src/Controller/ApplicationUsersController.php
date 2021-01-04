<?php

namespace App\Controller;

use App\Constants\StatusConstants;
use App\Entity\{UserPlan,UserAddons,Users,ApplicationUsers};
use App\Security\AppAuthenticationAuthenticator;
use App\Service\TableMakerService;
use App\Service\UserFunctionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class ApplicationUsersController extends AbstractController
{
    /**
     * @Route("/application/users", name="agency_users")
     */
    public function index(TableMakerService $tableGenerate): Response
    {
        $repository = $this->getDoctrine()->getRepository(ApplicationUsers::class);
        $userList = $repository->listUsers('ROLE_AGENCY,ROLE_FSBO');
        $tableGenerate->tableHeader = array('First Name', 'Last Name', 'Email', 'User Role', 'Mobile Number', 'Status');
        $userArry = [];
        $actionsList = [];
        foreach ($userList as $key => $value) {
            $userArry[] = array(
                $value['firstname'] => array('type' => 'text', 'name' => ucfirst($value['firstname']), 'link' => ($value['userId']['roles'][0] == 'ROLE_AGENCY') ? 'agent/' . $value['id'] : 'fsbo/' . $value['id'] . '/dashboard'),
                $value['lastname'] => array('type' => 'text', 'name' => $value['lastname']),
                $value['userId']['email'] => array('type' => 'text', 'name' => $value['userId']['email']),
                $value['userId']['roles'][0] => array('type' => 'text', 'name' => $value['userId']['roles'][0]),
                $value['mobilenumber'] => array('type' => 'text', 'name' => $value['mobilenumber']),
                "status_check" => array('type' => 'checkbox', 'name' => 'status', 'id' => $value['id'], 'css' => 'class="agency_activitaion"', 'checked' => $value['status']),
            );
            $actionsList[] = array(
                'Update' => array('name' => 'info', 'link' => 'new-users?id=' . $value['id']),
                'Delete' => array('type' => 'button', 'name' => 'danger deleteUser-btn', 'custom' => 'data-id="' . $value['id'] . '"', 'link' => '#'),
            );
        }

        $tableGenerate->tableBody = $userArry;
        $tableGenerate->tableActions = $actionsList;

        $content = $tableGenerate->tableRender();
        return $this->render('agency/index.html.twig', [
            'tableData' => $content,
        ]);
    }

    /**
     * @Route("/application/new-users", name="application_new_users")
     */
    public function newUser(
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        GuardAuthenticatorHandler $guardHandler,
        AppAuthenticationAuthenticator $authenticator,
        UserFunctionService $userFunctionService
    ): Response {
        try {
            $data['email'] = " ";
            $data['plainPassword'] = " ";
            $data['firstname'] = " ";
            $data['lastname'] = " ";
            $data['mobile'] = " ";
            $data['address'] = " ";
            $data['id'] = 0;

            if ($request->isMethod('post')) {
                $postData = $request->request->all();
                $profileUrl = '';
                //====================================================================
                $target_dir = "assets/images/";
                $profileUrl = $target_file = $target_dir . basename($_FILES["profile"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                $check = getimagesize($_FILES["profile"]["tmp_name"]);
                if ($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    //echo "File is not an image.";
                    $uploadOk = 0;
                }

                if (file_exists($target_file)) {
                    //echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                if ($_FILES["profile"]["size"] > 500000) {
                    //echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                } else {
                    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
                        //echo "The file " . htmlspecialchars(basename($_FILES["profile"]["name"])) . " has been uploaded.";
                    }
                }
                //======================================================================
                $entityManager = $this->getDoctrine()->getManager();
                #------------Addon---------
                /*$userAddons = new UserAddons();
                $userAddons->setTitle($postData['title']);
                $userAddons->setBhd($postData['bhd']);
                $userAddons->setSixMonthPackage($postData['six_month_package']);
                $userAddons->setAnnualPackage($postData['annual_package']);
                $userAddons->setPromoAnnual($postData['promo_annual']);
                $userAddons->setListing($postData['listing']);
                $userAddons->setCrm($postData['crm']);
                $userAddons->setFetured($postData['fetured']);
                $userAddons->setPremium($postData['premium']);
                $userAddons->setStatus(StatusConstants::ACTIVE);
                $userPlan = $this->getDoctrine()->getRepository(UserPlan::class)->findOneById($postData['userPlan']);                
                $userAddons->setPlanAddon($userPlan);
                $entityManager->persist($userAddons);
                $entityManager->flush();*/
                //=======================================================================
                $user = new Users();
                if ($postData['id']) {
                    $user = $this->getDoctrine()->getRepository(Users::class)->findOneById($postData['id']);
                }
                $user->setEmail($postData['email']);
                if ($postData['id'] == 0) {
                    $user->setRoles([$postData['userrole']]);
                }
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $postData['plainPassword']
                    )
                );
                
                $entityManager->persist($user);
                $entityManager->flush();
                // do anything else you need here, like send an email
                $userId = $user->getId();
                $date = date('Y-m-d H:i:s');

                $repository = $this->getDoctrine()->getRepository(Users::class);
                $userId = $repository->findOneById($userId);

                $appUser = new ApplicationUsers();
                if ($postData['id']) {
                    $appUser = $this->getDoctrine()->getRepository(ApplicationUsers::class)->findOneByUserId($postData['id']);
                }
                $appUser->setProfileImage($profileUrl);
                $appUser->setFirstname($postData['firstname']);
                $appUser->setLastname($postData['lastname']);
                $appUser->setMobilenumber($postData['mobile']);
                $appUser->setAddress($postData['address']);
                $appUser->setUserId($userId);
                $appUser->setStatus(StatusConstants::ACTIVE);
                $appUser->setPlanStatus(StatusConstants::INACTIVE);
                $appUser->setCreateAt(\DateTime::createFromFormat('Y-m-d H:i:s', $date));
                $appUser->setCreatedBy('User');
                $appUser->setLastActivityDate(\DateTime::createFromFormat('Y-m-d H:i:s', $date));
                $appUser->setAddons($userAddons);
                $entityManager->persist($appUser);
                $entityManager->flush();

                if ($postData['id']) {
                    $this->addFlash('success', 'User updated successfully!');
                } else {
                    $this->addFlash('success', 'New user created successfully!');
                }
                return $this->redirectToRoute('agency_users');
                /*return $guardHandler->authenticateUserAndHandleSuccess(
            $user,
            $request,
            $authenticator,
            'main' // firewall name in security.yaml
            );*/
            }
            if ($request->isMethod('get')) {
                $id = $request->query->get('id');
                if (!empty($id)) {
                    $apprepository = $this->getDoctrine()->getRepository(ApplicationUsers::class)->findOneById($id);
                    $userRepository = $this->getDoctrine()->getRepository(Users::class)->findOneById($apprepository->getUserId()->getId());

                    $data['email'] = $userRepository->getEmail();
                    $data['firstname'] = $apprepository->getFirstname();
                    $data['lastname'] = $apprepository->getLastname();
                    $data['mobile'] = $apprepository->getMobilenumber();
                    $data['address'] = $apprepository->getAddress();
                    $data['id'] = $userRepository->getId();
                }
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error Occured! Please contact system admin');
        }
        $usersTree = $userFunctionService->getUserTree('ROLE_ADMIN');
        $planList = $this->getDoctrine()->getRepository(UserPlan::class)->getAll();
        return $this->render('agency/newUser.html.twig', [
            'registrationForm' => '',
            'role' => 'ROLE_AGENCY',
            'plans' => $planList,
            'data' => $data,
        ]);
    }

    /**
     * @Route("/application/admin/dashboard", name="admin_profile")
     */
    public function adminDashboard(Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        GuardAuthenticatorHandler $guardHandler,
        AppAuthenticationAuthenticator $authenticator,
        UserFunctionService $userFunctionService,
        UserFunctionService $userfunctions,
        TableMakerService $tableGenerate
    ): Response {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userArry = $userFunctionService->getLoginUserDetails('userId', $user->getId());
        $propertyCount = $userfunctions->getPropertiesCount($user->getId());
        $agencycount = $userfunctions->getAgencyCount();
        $agentsCount = $userfunctions->getAgentCount();
        #=======================================================================
        $planList = $this->getDoctrine()->getRepository(ApplicationUsers::class)->getRequestedPlansList();

        $tableGenerate->tableHeader = array('Requested User', 'mobile number', 'Requested Plan', 'Previous Plan');
        $planArry = [];
        $actionsList = [];
        foreach ($planList as $key => $value) {
            $planArry[] = array(
                $value['firstname'] . "_1" => array('type' => 'text', 'name' => ucfirst($value['firstname'] . ' ' . $value['lastname'])),
                $value['mobilenumber'] . "_2" => array('type' => 'text', 'name' => $value['mobilenumber']),
                $value['title'] . "_3" => array('type' => 'text', 'name' => $value['title']),
                $value['ptitle'] . "_4" => array('type' => 'text', 'name' => $value['ptitle']),
            );

            $actionsList[] = array(
                'View Details' => array('type' => 'button', 'name' => 'info', 'link' => '#'),
                'Approve' => array('type' => 'button', 'name' => 'danger planUpdate-btn', 'custom' => 'data-plan="' . $value['plan'] . '"data-user="' . $value['user'] . '"', 'link' => '#'));
        }
        $tableGenerate->tableBody = $planArry;
        $tableGenerate->tableActions = $actionsList;
        $content = $tableGenerate->tableRender();

        #=======================================================================
        return $this->render('admin/dashboard.html.twig', [
            'registrationForm' => '', 'role' => 'ROLE_ADMIN',
            'data' => $userArry,
            'propertyCount' => $propertyCount,
            'agencyCount' => $agencycount,
            'agentsCount' => $agentsCount,
            'tableData' => $content,
        ]);
    }

    /**
     * @Route("/application/agency/{id}/dashboard", name="agency_profile")
     */
    public function agencyDashboard(
        $id,
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        GuardAuthenticatorHandler $guardHandler,
        AppAuthenticationAuthenticator $authenticator,
        UserFunctionService $userFunctionService,
        TableMakerService $tableGenerate
    ): Response {
        $userArry = $userFunctionService->getLoginUserDetails('id', $id);
        $propertyCount = $userFunctionService->getPropertiesCount($id);
        $agentsCount = $userFunctionService->getAgentCount($id);
        $planList = $this->getDoctrine()->getRepository(UserPlan::class)->getAll();

        $tableGenerate->tableHeader = array('Title', 'Description', 'BHD', '6th Month Package');
        $planArry = [];
        $actionsList = [];
        foreach ($planList as $key => $value) {
            $planArry[] = array(
                $value['title'] . "_1" => array('type' => 'text', 'name' => ucfirst($value['title'])),
                $value['description'] . "_2" => array('type' => 'text', 'name' => $value['description']),
                $value['bhd'] . "_3" => array('type' => 'text', 'name' => 'BHD ' . $value['bhd']),
                $value['sixMonthPackage'] . "_4" => array('type' => 'text', 'name' => 'BHD ' . $value['sixMonthPackage']),
            );
            $rowActionsAry['config'][]['tr'] = array('style' => $userArry['plan']->getId() == $value['id'] ? "background-color: #b1d2b1;" : "");
            $actionsList[] = array('View Details' => array('name' => 'info', 'link' => 'new-users?id=' . $value['id']), 'Activate' => array('name' => 'danger activate-btn', 'custom' => 'data-id="' . $value['id'] . '"', 'link' => '#'));
        }
        $tableGenerate->tableBody = $planArry;
        $tableGenerate->rowActions = $rowActionsAry;
        $tableGenerate->tableActions = $actionsList;
        $content = $tableGenerate->tableRender();

        return $this->render('agency/dashboard.html.twig', [
            'registrationForm' => '',
            'role' => 'ROLE_AGENCY',
            'propertyCount' => $propertyCount,
            'data' => $userArry,
            'tableData' => $content,
            'agentsCount' => $agentsCount,
        ]);
    }

    /**
     * @Route("/application/agency/{id}/update-plan/{plan}", name="agency_plan_update")
     */
    public function agencyPlanChange(
        $id,
        $plan,
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        GuardAuthenticatorHandler $guardHandler,
        AppAuthenticationAuthenticator $authenticator,
        UserFunctionService $userFunctionService,
        TableMakerService $tableGenerate
    ): Response {
        try {
            $userPlan = $this->getDoctrine()->getRepository(UserPlan::class)->findOneById($plan);
            $apprepository = $this->getDoctrine()->getRepository(ApplicationUsers::class)->findOneById($id);
            $apprepository->setPrevPlan($apprepository->getCurrentPlan());
            $apprepository->setCurrentPlan($userPlan);
            $apprepository->setPlanStatus(StatusConstants::PENDING);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($apprepository);
            $entityManager->flush();
            return $response = new JsonResponse(['result' => 1, 'message' => 'Plan updated successfully']);
        } catch (Exception $e) {
            return $response = new JsonResponse(['result' => 0, 'message' => 'Plan updation fail']);
        }

    }

    /**
     * @Route("/application/user/{id}/delete", name="admin_delete_user")
     */
    public function userDelete(Request $request,
        $id
    ): Response {
        try {
            $apprepository = $this->getDoctrine()->getRepository(ApplicationUsers::class)->findOneById($id);
            $apprepository->setStatus(StatusConstants::DELETED);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($apprepository);
            $entityManager->flush();
            return $response = new JsonResponse(['result' => 1, 'message' => 'User deleted successfully']);
        } catch (Exception $e) {
            return $response = new JsonResponse(['result' => 0, 'message' => 'User deleted fail']);
        }
    }

}
