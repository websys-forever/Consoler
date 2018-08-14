<?php

namespace WebsysForever;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
class SumCommand extends Command
{
	public function configure()
	{
		$this->setName("sum")
			->setDescription("This command sums two numbers for you")
			->addArgument('a', InputArgument::REQUIRED, "First number")
			->addArgument('b', InputArgument::REQUIRED, "Second number");
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$a = $input->getArgument('a');
		$b = $input->getArgument('b');
		$sum = new Sum;
		$res = $sum->sum($a, $b);
		$output->writeln($res);
	}
}

