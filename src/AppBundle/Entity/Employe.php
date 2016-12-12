<?php
/**
 * Created by PhpStorm.
 * User: botte.v
 * Date: 12/12/2016
 * Time: 09:43
 */

namespace AppBundle\Entity;


class Employe
{

        private $num;
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $sport;
        private $voitures;

        public function getNum(){
            return $this->num;
        }

        public function setNum($num){
            $this->num = $num;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function getSport(){
            return $this->sport;
        }

        public function setSport($sport){
            $this->sport = $sport;
        }

        public function getVoitures(){
            return $this->voitures;
        }

        public function setVoitures($voitures){
            $this->voitures = $voitures;
        }

        public function getDateNaissance(){
            return $this->dateNaissance;
        }

        public function setDateNaissance($dateNaissance){
            $this->dateNaissanc = $dateNaissance;
        }

        function __construct($num, $nom, $prenom, $dateNaissance, $sport, $voitures)
        {
            $this->num = $num;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
            $this->sport = $sport;
            $this->voitures = $voitures;
        }
}