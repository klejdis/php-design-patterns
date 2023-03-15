<?php

interface LeafInterface
{
    public function getName(): string;
    public function isComposite(): bool;
}