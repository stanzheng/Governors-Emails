<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KaineEmail Model
 *
 * @method \App\Model\Entity\KaineEmail get($primaryKey, $options = [])
 * @method \App\Model\Entity\KaineEmail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KaineEmail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KaineEmail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KaineEmail findOrCreate($search, callable $callback = null)
 */
class KaineEmailTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('kaine_email');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('file');

        $validator
            ->time('date')
            ->allowEmpty('date');

        $validator
            ->allowEmpty('subject');

        $validator
            ->allowEmpty('senderName');

        $validator
            ->allowEmpty('recipientName');

        $validator
            ->allowEmpty('ccName');

        $validator
            ->allowEmpty('body');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
