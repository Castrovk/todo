<?php
class task
{
    public ?int $id = null;
    public string $description;
    public int $done = 0;

    public function __construct(string $description, int $done, ?int $id = null)
    {
        $this->id = $id;
        $this->description = $description;
        $this->done = $done;
        
    }
}