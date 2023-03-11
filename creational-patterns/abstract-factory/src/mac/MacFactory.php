<?php

class MacFactory extends GuiFactory
{
    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new WindowsCheckbox();
    }
}
