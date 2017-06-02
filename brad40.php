<?php
    include 'sql2.php';
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $sql = "insert into trip (tid,tname,city,town,memo) values (?,?,?,?,?)";



    $json = file_get_contents("http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvSuggestTravel.aspx");
    $root = json_decode($json);
    foreach ($root as $row){
        $tid = $row->ID;
        $tname = $row->Name;
        $city = $row->City;
        $town = $row->Town;
        $memo = $row->MovingIntroduction;
        $pdo->prepare($sql)->execute([$tid,$tname,$city,$town,$memo]);
    }


//    $json = '{
//                "id":"123",
//                "name": "brad",
//                "lang": [
//                    {"name":"Java",
//                     "level": "1"
//                    },
//                    {"name":"PHP",
//                     "level": "2"
//                    },
//                    {"name":"Android",
//                     "level": "3"
//                    },
//                    {"name":"iOS",
//                     "level": "4"
//                    }
//                ]}';
//    $root = json_decode($json);
//    echo "$root->name";