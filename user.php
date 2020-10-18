<?php

    class usuario{
        private $nome;
        private $sobrenome;

        public function olhaMundo()
        {
            return "Olá".$this->getNome();
        }

        public function getNome()
        {
            return $this->nome;
        }
        public function getSobrenome()
        {
            return $this->sobrenome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome)
        {
            $this->sobrenome = $sobrenome;
        }

        public function registrar()
        {
            return $this->getNome(). " >>registrado";
        }

        public function email()
        {
            return ">>email enviado";
        }

    }

    $usuario1 = new usuario();
    $usuario1->setNome('Pedro');
    $usuario1->setSobrenome('de Sá');

    echo $usuario1->olhaMundo();//.' '.$usuario1->getNome().' '.$usuario1->getSobrenome();

    echo "<br> <br>";
    $usuario2 = new usuario();
    $usuario2->setNome('Johnny');
    $usuario2->setSobrenome('Walker');

    echo $usuario2->olhaMundo();//.' '.$usuario2->getNome();//.' '.$usuario2->getSobrenome();

    echo "<br> <br>";

    $usuarioRambo = new usuario();
    $usuarioRambo->setNome('Sylvester');
    $usuarioRambo->setSobrenome('Stallone');

    echo $usuarioRambo->olhaMundo();
?>