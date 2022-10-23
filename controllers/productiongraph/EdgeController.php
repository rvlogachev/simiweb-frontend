<?php

namespace app\controllers\productiongraph;

use app\components\SharedDataFilter;
use app\models\productiongraph\Edge;
use tebe\inertia\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\web\HttpException;
use yii\web\Response;

class EdgeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
            [
                'class' => SharedDataFilter::class,
            ]
        ];
    }

    public function actionIndex($id, $search = null, $year = null, $edge_type = null, $remember = null)
    {
        if ($remember === 'forget') {
            $search = null;
            $role = null;
            $trashed = null;
        }

        $dataProvider = Edge::findByParams($id, $search, $year, $edge_type);

        return $this->inertia('Production graph/EdgeIndex', [
            'filters' => [
                'file' => $id,
                'search' => $search,
                'year' => $year,
                'edge_type' => $edge_type,
            ],
            'edges' => $this->mapEdges($dataProvider->getModels()),
        ]);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws HttpException
     */
    public function actionEdit($id)
    {
        $edge = Edge::findById($id);
        if (is_null($edge)) {
            throw new HttpException(404);
        }
        return $this->inertia('Production graph/Edit', [
            'edge' => $edge
        ]);
    }

    /**
     * @return array|string
     */
    public function actionCreate()
    {
        return $this->inertia('Production graph/Create');
    }

    /**
     * @return Response
     */
    public function actionInsert()
    {
        $params = Yii::$app->request->post();
        $params['metaload_dataset_id'] = 1;
      //  $params['metaload_user_id'] = 1;
        $edge = Edge::fromArray($params);
        if ($edge->save()) {
            Yii::$app->session->setFlash('success', 'Edge created.');
            return $this->redirect(['productiongraph/edge/index']);
        }
        Yii::$app->session->setFlash('errors', $edge->getErrors());
        return $this->redirect(['productiongraph/edge/create']);
    }

    /**
     * @param int $id
     * @return Response
     * @throws HttpException
     */
    public function actionUpdate($id)
    {
        $edge = Edge::findOne($id);
        if (is_null($edge)) {
            throw new HttpException(404);
        }
        $edge->attributes = Yii::$app->request->post();
        if ($edge->save()) {
            Yii::$app->session->setFlash('success', 'Edge updated.');
            return $this->redirect(['productiongraph/edge/edit', 'id' => $id]);
        }
        Yii::$app->session->setFlash('errors', $edge->getErrors());
        return $this->redirect(['productiongraph/edge/edit', 'id' => $id]);
    }

    /**
     * @param int $id
     * @return Response
     * @throws HttpException
     */
    public function actionDelete($id)
    {
        $edge = Edge::findOne($id);
        if (is_null($edge)) {
            throw new HttpException(404);
        }
        if ($edge->delete() > 0) {
            Yii::$app->session->setFlash('success', 'Edge deleted.');
        }
        return $this->redirect(['productiongraph/edge/index']);
    }

    // /**
    //  * @param $id
    //  * @return Response
    //  * @throws HttpException
    //  */
    // public function actionRestore($id)
    // {
    //     $user = User::findOne($id);
    //     if (is_null($user)) {
    //         throw new HttpException(404);
    //     }
    //     if ($user->restore() > 0) {
    //         Yii::$app->session->setFlash('success', 'User restored.');
    //     }
    //     return $this->redirect(['user/edit', 'id' => $id]);
    // }

    /**
     * @param array $edges
     * @return array
     */
    private function mapEdges(array $edges)
    {
        return array_map(function ($row) {
            $row['source_node'] = $row['source_node'];
            $row['target_node'] = $row['target_node'];
            $row['year'] = $row['year'];
            $row['edge_type'] = $row['edge_type'];
            // unset($row['source_node'], $row['target_node'], $row['year'], $row['edge_type']);
            return $row;
        }, $edges);
    }
}
