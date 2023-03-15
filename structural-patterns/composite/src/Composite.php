<?php

class Composite extends Leaf {

    private array $children = [];

    public function __construct($name){
        parent::__construct($name);
    }

    public function add(LeafInterface $leaf): void{
        $this->children[] = $leaf;
    }

    public function remove(LeafInterface $leaf): void{
        $this->children = array_filter($this->children, function($child) use ($leaf){
            return $child !== $leaf;
        });
    }

    public function isComposite(): bool{
        return true;
    }

    public function getChildren(): array{
        return $this->children;
    }
}