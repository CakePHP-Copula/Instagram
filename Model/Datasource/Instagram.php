<?php
/**
 * Instagram Driver for Apis Source
 *
 * Makes usage of the Apis plugin by Proloser
 *
 * @requires https://github.com/ProLoser/CakePHP-Api-Datasources
 * @package Instagram Datasource
 * @author Dean Sofer
 * @version 0.0.1
 **/
App::uses('ApisSource', 'Apis.Model/Datasource');
class Instagram extends ApisSource {

    /**
     * The description of this data source
     *
     * @var string
     */
    public $description = 'Instagram DataSource Driver';

    /**
     * Stores the queryData so that the tokens can be substituted just before requesting
     *
     * @param string $model
     * @param string $queryData
     * @return mixed $data
     * @author Dean Sofer
     */
    public function read(&$model, $queryData = array()) {
        $this->tokens = $queryData['conditions'];
        return parent::read($model, $queryData);
    }
}