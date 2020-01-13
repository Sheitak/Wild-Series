<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        $slugify = new Slugify();

        for ($i = 0; $i < 70; $i++)
        {
            $episode = new Episode();
            $episode->setTitle($faker->domainWord);
            $episode->setNumber($faker->randomDigit);
            $episode->setSummary($faker->text);
            $episode->setSlug($slugify->generate($episode->getTitle()));
            $manager->persist($episode);

            $this->addReference('episode_' . $i, $episode);
            $episode->setSeason($this->getReference('season_0'));
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [SeasonFixtures::class];
    }
}
