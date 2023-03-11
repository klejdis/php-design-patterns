<?php

interface GuiFactoryInterface
{
    public function createButton(): ButtonInterface;
    public function createCheckbox(): CheckboxInterface;
}