<?php

namespace app\common\modules\queuemanager\commands\handler;

use app\models\UploadFiles;
use app\commands\command\AddToTimelineCommand;
use trntv\tactician\base\BaseHandler;
use Yii;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class AddToTimelineHandler extends BaseHandler
{
    /**
     * @param AddToTimelineCommand $command
     * @return bool
     */
    public function handle($command)
    {
        $model = new UploadFiles();
        $model->metaload_user_id = 1;
        $model->filename = "Orders in queue";

        $model->description = json_encode($command->data, JSON_UNESCAPED_UNICODE);
        return $model->save(false);
    }
}
