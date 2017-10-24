<?php

namespace PiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursesRepository
 *
 * @author AhmedChebbi
 */
class CoursesRepository extends EntityRepository {

    public function CountCourses() {
        $query = $this->getEntityManager()
                ->createQuery('SELECT c FROM PiBundle:Courses c ');
        
        return $query->getResult();
    }
   
    }


