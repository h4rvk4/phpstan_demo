<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="demo_table")
 */
class DemoEntity {

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="entity_seq")
	 */
	private ?int $id = null;

	/**
	 * @return ?int
	 */
	public function getId(): ?int {
		return $this->id;
	}

}
