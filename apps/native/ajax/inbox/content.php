<?php
# @*************************************************************************@
# @ Software author: Mansur Altamirov (Mansur_TL)                           @
# @ Author_url 1: https://www.instagram.com/mansur_tl                       @
# @ Author_url 2: http://codecanyon.net/user/mansur_tl                      @
# @ Author E-mail: vayart.help@gmail.com                                    @
# @*************************************************************************@
# @ ColibriSM - The Ultimate Modern Social Media Sharing Platform           @
# @ Copyright (c) 2020 - 2021 ColibriSM. All rights reserved.               @
# @*************************************************************************@

if ($action == 'send_message') {
    $data['err_code'] = "invalid_req_data";
    $data['status']   = 400;
    $message           = fetch_or_get($_POST['message'], "");
    $conversation_id = fetch_or_get($_POST['conversation_id'], 0);
    if(not_empty($message) && is_posnum($conversation_id)){
        $db->insert
    }
}