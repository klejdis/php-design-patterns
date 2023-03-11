<?php

/**
 * This is the application class that will request the gui factory to create
 * the gui components
 */
class Application
{
    protected GuiFactory $guiFactory;


    public function __construct(GuiFactory $factory)
    {
        $this->guiFactory = $factory;
    }

    /**
     * @return GuiFactory
     */
    public function getGuiFactory()
    {
        return $this->guiFactory;
    }/**
     * @param GuiFactory $guiFactory
     */
    public function setGuiFactory($guiFactory)
    {
        $this->guiFactory = $guiFactory;
    }
}