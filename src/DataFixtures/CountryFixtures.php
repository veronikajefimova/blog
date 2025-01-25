<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $country = new Country();
        $country->setName('Turkey');
        $country->setCapital('Istanbul');
        $country->setFlagUrl('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/800px-Flag_of_Turkey.svg.png');
        $manager->persist($country);

        $country2 = new Country();
        $country2->setName('Finland');
        $country2->setCapital('Helsinki');
        $country2->setFlagUrl('https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/800px-Flag_of_Finland.svg.png');
        $manager->persist($country2);

        $manager->flush();

        $this->addReference('country_1', $country);
        $this->addReference('country_2', $country2);
    }
}
