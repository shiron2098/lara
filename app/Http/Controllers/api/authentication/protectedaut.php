<?php


class protectedaut
{

    public function selectkey($auttoken)
    {
        $_SESSION['AUT'] = false;
        $this->checktoken($auttoken);

    }
