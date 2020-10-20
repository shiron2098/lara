<?php


class protectedaut
{

    public function selectkey($auttoken)
    {
        $_SESSION['AUT'] = false;
            $this->checktoken($auttoken);

    }

    private function checktoken($token)
    {

        $arr = explode(" ", $token);
        $jwt = $arr[1];
        try {
            $decoded = JWT::decode($jwt, userglobalkey, array('HS256'));
            if ($decoded->ext > time()) {
                $_SESSION['AUT'] = true;
            } else {
                $_SESSION['AUT'] = false;
                log::logInsert('protectaut_autification false acces-token time end #'  . $decoded->id ,log_file_authentication,ERROR);
                http_response_code(403);
            }

        } catch (Exception $e) {
            log::logInsert($e->getMessage() ,log_file_authentication,ERROR);
            http_response_code(401);
            echo json_encode(array(
                "message" => "Access denied.",
                "error" => $e->getMessage()
            ));
        }
    }
}
