<?php

class ApplicationFactory
{
    public function createApplication(): Application
    {
        //this is hard coded for the sake of the example
        $os = 'mac'; //'windows or mac'

        if ($os === 'windows') {
            $factory = new WindowsFactory();
        } else {
            $factory = new MacFactory();
        }

        return new Application($factory);
    }
}