<?php

namespace PiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersRepository
 *
 * @author AhmedChebbi
 */
class UsersRepository extends EntityRepository {

    public function CountFormateur() {
        $query = $this->getEntityManager()
                ->createQuery('SELECT u FROM PiBundle:Users u where u.type=:t');
        $query->setParameter('t', 'Aprenant');
        return $query->getResult();
    }
    public function CountApprenant() {
        $query = $this->getEntityManager()
                ->createQuery('SELECT u FROM PiBundle:Users u where u.type=:t');
        $query->setParameter('t', 'Formateur');
    return $query->getResult();}
    
public function CountPedagogue() {
        $query = $this->getEntityManager()
                ->createQuery('SELECT u FROM PiBundle:Users u where u.type=:t');
        $query->setParameter('t', 'Pedagogue');
    return $query->getResult();    
    }
    
    public function ListOrganisation(){
        $query = $this->getEntityManager()
                ->createQuery('SELECT u FROM PiBundle:Users u where u.type=:t');
        $query->setParameter('t', 'Organism');
        return $query->getResult();
    }
    public function AccepteOrganisme($id){
        $query = $this->getEntityManager()
                ->createQuery('select u.enabled from PiBundle:Users u where u.idUser=:t');
        $query->setParameter('t', $id);
        $r = $query->getResult();
        $resultat =$r[0]['enabled'];
        if ($resultat == 2 or 0){
            $query1 = $this->getEntityManager()
                ->createQuery('update PiBundle:Users u set u.enabled=1 where u.idUser=:t');
        $query1->setParameter('t', $id);
        $query1->execute();
        }
        elseif ($resultat == 3) {
            $query2 = $this->getEntityManager()
                ->createQuery('update PiBundle:Users u set u.enabled=2 where u.idUser=:t');
        $query2->setParameter('t', $id);
        $query2->execute();
        }
    }
//        $qb = $this->getEntityManager()->createQueryBuilder(); 
//        $qb->select('count(r.idUser)')
//       ->from('PiBundle:Users', 'r')
//       ->where('r.type = :type')
//       ->setParameter('type','Formateur')
//       
//               ;      
//       return $qb->getQuery()
//               ->getResult();
    }


