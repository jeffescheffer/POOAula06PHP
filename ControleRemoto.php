<?php
require_once 'Controlador.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleRemoto
 *
 * @author Jefferson
 */
class ControleRemoto implements Controlador {
    //put your code here
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos especiais
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }

    public function desligar() {
        $this->setLigado(FALSE);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "<br>Fechando Nenu...";
    }

    public function ligar() {
        $this->setLigado(TRUE);
    }
    public function tocar(){
        $this->setTocando(TRUE);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()) {
            $this->setVolume(0);
        }
    }
    
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro! Não posso almentar o volume</p>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "<p>Erro! Não posso diminuir o volume</p>";
        }
        
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(FALSE);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(TRUE);
        }
    }

}
