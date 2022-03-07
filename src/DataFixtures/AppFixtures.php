<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        /*$manager->flush();*/
        $this->loadSkills($manager);
    }

    private function loadSkills(ObjectManager $manager): void
    {
        $skills = $this->getSkillsData();
        foreach ($skills as [$name]) {
            $skill = new Skill();
            $skill->setName($name);
            $manager->persist($skill);
        }
        $manager->flush();
    }


    private function getSkillsData(): array
    {
        return [
            // $SkillsData = [$name];
            ['Integrity' ],
            ['Critical thinking' ],
            ['Problem solving' ],
            ['Communication' ],
            ['Reliability' ],
        ];
    }


}

