<?php

namespace Bundle\EventBundle\Controller;

use Bundle\EventBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Bundle\EventBundle\Reporting\EventReportManager;

class ReportController extends Controller
{
    /**
    * @Route("/events/report/showAllEvents.csv")
    */
    public function showAllEventsAction()
    {
        $eventReportManager = $this->container->get('event_report_manager');
        $content = $eventReportManager->getRecentlyUpdatedReport();

        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }

}

