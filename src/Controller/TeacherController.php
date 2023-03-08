<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }

    #[Route('/teacher/{name}')]
    public function showTeacher($name){
        return $this->render('teacher/showTeacher.html.twig,', [
            'n' => $name
        ]);
}

#[Route('/student')]
public function goToIndex() {

    return $this ->forward('App\Controller\Student::index');
}
}
