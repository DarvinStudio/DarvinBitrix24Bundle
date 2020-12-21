DarvinBitrix24Bundle
====================

This bundle provides Bitrix24 integration for Symfony-based applications.

## Usage

```php
use Darvin\Bitrix24Bundle\Client\ClientInterface;
use Darvin\Bitrix24Bundle\Lead\LeadFactoryInterface;
use Darvin\Bitrix24Bundle\Model\CRM\ProductRow;
use Darvin\Bitrix24Bundle\Request\Command\Factory\CRM\LeadCommandFactoryInterface;
use Darvin\Bitrix24Bundle\Request\Request;

public function __construct(
    ClientInterface $client,
    LeadCommandFactoryInterface $leadCommandFactory,
    LeadFactoryInterface $leadFactory
) {
    $this->client = $client;
    $this->leadCommandFactory = $leadCommandFactory;
    $this->leadFactory = $leadFactory;
}

$request = new Request();
$request->addCommand($this->leadCommandFactory->createAddCommand($this->leadFactory->createLead('test')));
$request->addCommand($this->leadCommandFactory->createSetProductRowsCommand(new ProductRow(1)));

$result = $this->client->send($request);
```
