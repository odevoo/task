<?php 
require_once 'functions.php';
$json = file_get_contents('data.json');
$data = json_decode($json, true);
if (is_array($data)) {
    krsort($data);
}


switch ($_GET{'mode'}) {

   case 'remove':
        
        $id = $_GET['id'];
        $data[$id]['status'] = 2;
        save($data);

        break;

    case 'stop':
        
        $id = $_GET['id'];
        $data[$id]['date_end'] = time();
        save($data);

        break;
    
    case 'new':
        
        $time =time();
        $data[$time]['id'] = $time;
        $data[$time]['name'] = $_GET['name'];
        $data[$time]['date_start'] = $time;
        $data[$time]['date_end'] = '';
        $data[$time]['status'] = 1;
        save($data);

        break;


    case 'tally':
        $count= 0;
        if (is_array($data)) {
            # code...
        
        foreach ($data as $task) {
            if ($task['status'] == 1) {
            if ($task['date_end'] == "") {
                $task['date_end'] = time();
            }
           $count = $count + ($task['date_end'] - $task['date_start']);
        }}}
        echo time_nice($count);
        break;



    case 'build':
    if (is_array($data)) {
        # code...
    
        foreach ($data as $task) {
            if ($task['status'] == 1) {
                

            ?>
            <tr>
                <td><?php echo $task['name']?></td>
                <td><?php echo date_nice($task['date_start'])?></td>
                <td><?php 
                if ($task['date_end'] != "") {
                    echo date_nice($task['date_end']);
                } 

                    ?></td>
                <td><?php
                if ($task['date_end'] == "") {
                    echo time_nice(time() -$task['date_start']);
                } else {
                    echo time_nice($task['date_end'] - $task['date_start']);
                }


                ?></td>
                <td class="btn-col"><button data-id="<?= $task['id'] ?>" class="btn btn-info btn-stop" <?php if ($task['date_end'] != '') {
                    echo "disabled";
                } ?>><?=i('stop') ?></button></td>
                <td class="btn-col"><button data-id="<?= $task['id'] ?>" class="btn btn-danger btn-remove"><?=i('times') ?></button></td>
            </tr>
            <?php }}}
        break;
    
    default:
        # code...
        break;
}

