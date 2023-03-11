<?php

abstract class GuiFactory implements GuiFactoryInterface{

    public abstract function createButton(): ButtonInterface;
    public abstract function createCheckbox(): CheckboxInterface;

}