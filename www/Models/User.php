<?php

namespace App\Models;

use App\Core\SQL;

class User extends SQL
{
    private Int $id = 0;
    protected String $firstname;
    protected String $lastname;
    protected String $email;
    protected String $pwd;
    protected String $country;
    protected String $token;
    protected Int $status = 0;
    protected ?String $date_inserted;
    protected ?String $date_updated;

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }

    /**
     * @return String
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param String $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = strtoupper(trim($lastname));
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = strtolower(trim($email));
    }

    /**
     * @return String
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param String $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }

    /**
     * @return String
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param String $country
     */
    public function setCountry(string $country): void
    {
        $this->country = strtoupper(trim($country));
    }

    /**
     * @return Int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param Int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getDateInserted(): ?\DateTime
    {
        if ($this->date_inserted === null) {
            return null;
        }
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->date_inserted);
    }

    /**
     * @param \DateTime $date_inserted
     */
    public function setDateInserted(\DateTime $date_inserted): void
    {
        $this->date_inserted = $date_inserted->format('Y-m-d H:i:s');
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdated(): ?\DateTime
    {
        if ($this->date_updated === null) {
            return null;
        }
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->date_updated);
    }

    /**
     * @param \DateTime $date_updated
     */
    public function setDateUpdated(\DateTime $date_updated): void
    {
        $this->date_updated = $date_updated->format('Y-m-d H:i:s');
    }

    /**
     * @return String
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param String $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function verify(string $email, string $password): bool
    {
        // Prépare la requête SQL
        $user = $this->getOneWhere(['email' => $email]);

        // Vérifie si un utilisateur a été trouvé et que le mot de passe est correct
        if ($user && password_verify($password, $user->getPwd())) {
            return true;
        }

        return false;
    }
}
