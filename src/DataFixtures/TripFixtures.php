<?php

namespace App\DataFixtures;

use App\Entity\Country;
use App\Entity\Trip;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TripFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $trip = new Trip();
        $trip->setDestination('Istanbul');
        $trip->setStartDate(new \DateTime('2024-06-15'));
        $trip->setEndDate(new \DateTime('2024-06-23'));
        $trip->setNotes('Visiting Istanbul');
        $trip->setRating(5);
        $trip->setImages(['https://www.hotelgift.com/media/wp/HG/2022/08/blue-mosque-Turkey-where-to-stay-in-istanbul-1024x664.jpg']);
        $trip->setCountry($this->getReference('country_1', Country::class));
        $manager->persist($trip);

        $trip2 = new Trip();
        $trip2->setDestination('Helsinki');
        $trip2->setStartDate(new \DateTime('2024-05-29'));
        $trip2->setEndDate(new \DateTime('2024-05-30'));
        $trip2->setNotes('Visiting Helsinki');
        $trip2->setRating(5);
        $trip2->setImages(['https://img.static-kl.com/images/media/9C7C504D-75B8-47D6-BF64D20B7C323F06']);
        $trip2->setCountry($this->getReference('country_2', Country::class));
        $manager->persist($trip2);

        $manager->flush();
    }
}
