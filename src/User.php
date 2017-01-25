<?php
/**
 * Class User
 * @Entity @Table(name="users")
 */
class User
{

    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $uid;

    /**
     * @return mixed
     */
    public function getuid()
    {
        return $this->uid;
    }

}