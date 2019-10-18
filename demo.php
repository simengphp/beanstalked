<?php
    require_once 'vendor/autoload.php';

    use Pheanstalk\Pheanstalk;

    $p = new Pheanstalk('0.0.0.0', 11300);

    $data = array(
        'id' => 1,
        'name' => 'test',
    );

//向userReg管道中添加任务，返回任务ID
//put()方法有四个参数
//第一个任务的数据
//第二个任务的优先级，值越小，越先处理
//第三个任务的延迟
//第四个任务的ttr超时时间
    $id = $p->useTube('userReg')->put(json_encode($data));
//获取任务
    $job = $p->peek($id);
//查看任务状态
    print_r($p->statsJob($job));