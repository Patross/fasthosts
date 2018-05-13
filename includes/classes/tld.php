<?php


class TLD{

    public $suffix;
    public $status;
    public $price;

    public function TLD()
    {
        # code...
    }
    public function SetSuffix($suffixName) { $this->suffix = $suffixName; }
    public function SetStatus($status) { $this->status = $status; }
    public function SetPrice($price) { $this->price = $price; }


}