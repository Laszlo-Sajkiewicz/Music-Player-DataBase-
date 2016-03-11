<?php
 require_once('Model/Music.model.php');
 require_once('Model/MusicDAO.class.php');

$config = parse_ini_file('config/config.ini');
$jukebox = new MusicDAO($config['database_path']);
function loadMusicDB($first, $last){
        $config = parse_ini_file('config/config.ini');
        $mus = new MusicDAO($config['database_path']);
        $res = array();
        for ($i=$first; $i < $last; $i++) {
            $res[$i] = $mus->get($i);
        }
        return $res;
    }

        //$data['musicList'] = "";
        $data['first'] = 1;
        $data['last'] = 10;

        if (isset($_GET['mus'])){
            $data['musicList'][] = "<audio src=\"http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/mp3/" . ($_GET['mus']) . "\" controls autoplay></audio> \n";
        }
        if (isset($_GET['first'])){
            $data['first'] = $_GET['first'];
        }
        if (isset($_GET['last'])){
            $data['last'] = $_GET['last'];
        }
        $musique = loadMusicDB($data['first'], $data['last']);
        $data['musicList'] = $musique;

  include_once 'View/music.view.php';
?>
