<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Task;
use App\Enum\TaskStatus;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $task = new Task;
        $task ->setTitle("Blogs");
        $task ->setDescription("Create a Task");
        $task->setStatus(TaskStatus::PENDING);
        $task->setCreatedAt(new \DateTime());

         $manager->persist($task);

        $task = new Task;
        $task ->setTitle("Products");
        $task ->setDescription("Add Products");
        $task->setStatus(TaskStatus::PENDING);
        $task->setCreatedAt(new \DateTime());

        $manager->persist($task);

        $manager->flush();
    }
}
