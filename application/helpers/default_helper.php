<?php
function get_mac_address()
{
    $string = exec('getmac');
    $mac = substr($string, 0, 17);
    return $mac;
}

function get_browser_name()
{       
    $CI =& get_instance();
    return $CI->agent->browser();
}

function getAddressById($id)
{       
    $CI = & get_instance();
    $CI->db->select('*');
    $CI->db->from('user_address');
    $CI->db->where('userId', $id);
    $query = $CI->db->get();
    if ( $query->num_rows() > 0 )
    {
        return $query->result_array();
    }
    return 0;
}

function getAddress($id)
{       
    $CI = & get_instance();
    $CI->db->select('*');
    $CI->db->from('user_address');
    $CI->db->where('id', $id);
    $query = $CI->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row();
        return $row;
    }
    return 0;
}

function getUserById($id)
{       
    $CI = & get_instance();
    $CI->db->select('username,email,mobile');
    $CI->db->from('users');
    $CI->db->where('id', $id);
    $query = $CI->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row();
        return $row;
    }
    return 0;
}

function getStateByid($id)
{       
    $CI = & get_instance();
    $CI->db->from('states');
    $CI->db->where('id', $id);
    $query = $CI->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row();
        return $row;
    }
    return 0;
}
function getCityByid($id)
{       
    $CI = & get_instance();
    $CI->db->from('cities');
    $CI->db->where('id', $id);
    $query = $CI->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row();
        return $row;
    }
    return 0;
}

function encryptId($id)
{
    $simple_id = $id;

    $ciphering = "AES-128-CTR";

    $options = 0;

    $encryption_iv = '1234567891011121';

    $encryption_key = "$2y$10\$sCCllRntt8aTf3M5lxqyXeabehx7Z5UyIHo8ENeHV2H8BumxFbdKi";

    $encryption = openssl_encrypt(
        $simple_id,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    return $encryption;
}


function decryptId($encryption)
{
    $ciphering = "AES-128-CTR";

    $options = 0;

    $decryption_iv = '1234567891011121';

    $decryption_key = "$2y$10\$sCCllRntt8aTf3M5lxqyXeabehx7Z5UyIHo8ENeHV2H8BumxFbdKi";

    $decryption = openssl_decrypt(
        $encryption,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );

    return $decryption;
}


function get_ipAddress()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}






