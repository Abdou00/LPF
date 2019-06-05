<?php

namespace TripSort;

use TripSort\Model\Cards\BoardingCardInterface;
use TripSort\Service\Sorter\CardSorterInterface;
use TripSort\Service\Sorter\CardSorter;

/**
 * Class Trip
 * @package TripSort
 */
class Trip
{
    /**
     * @var BoardingCardInterface[]
     */
    private $boardingCards = [];

    /**
     * Trip constructor.
     * @param array $boardingCards
     * @param CardSorterInterface|null $sorter
     */
    public function __construct(array $boardingCards, CardSorterInterface $sorter = null)
    {
        $sorter = $sorter ?: new CardSorter();

        foreach ($boardingCards as $boardingCard) {
            $this->addBoardingCard($boardingCard);
        }

        $this->boardingCards = $sorter->sort($this->boardingCards);
    }

    /**
     * @return Model\Cards\BoardingCardInterface[]
     * @return array
     */
    public function getOrderedBoardingCards(): array
    {
        return $this->boardingCards;
    }

    /**
     * @param BoardingCardInterface $boardingCard
     */
    private function addBoardingCard(BoardingCardInterface $boardingCard): void
    {
        $this->boardingCards[] = $boardingCard;
    }
}
