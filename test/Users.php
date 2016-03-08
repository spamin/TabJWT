<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="usr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usrId;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_name", type="string", length=255, nullable=true)
     */
    private $usrName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_password", type="string", length=255, nullable=true)
     */
    private $usrPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_email", type="string", length=255, nullable=true)
     */
    private $usrEmail;

    /**
     * @var array
     *
     * @ORM\Column(name="usr_status", type="simple_array", nullable=true)
     */
    private $usrStatus;

    /**
     * @var array
     *
     * @ORM\Column(name="usr_role", type="simple_array", nullable=true)
     */
    private $usrRole;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_date", type="datetime", nullable=true)
     */
    private $usrDate;


}
