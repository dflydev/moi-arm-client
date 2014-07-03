<?php

namespace Moi\Arm\Client\Soap;

use Moi\Arm\Client\ArmClient;
use Moi\Arm\Client\ReferenceGroupName;
use Moi\Arm\Client\ReferenceItem;
use SoapClient;
use SoapVar;

class SoapArmClient implements ArmClient
{
    private $soapClient;
    private $agencyId;
    private $xmlNamespace;

    private $soapVarAgcHcsId;

    const REFERENCE_STATES = 0;
    const REFERENCE_LANGUAGES = 1;
    const REFERENCE_RACES = 3;
    const REFERENCE_ETHNICITIES = 4;
    const REFERENCE_MORTGAGE_TYPES = 5;
    const REFERENCE_MARITAL_STATUSES = 6;
    const REFERENCE_CONTACT_TYPES = 7;
    const REFERENCE_CMS_VENDOR_NAMES = 10;
    const REFERENCE_COUNSELING_TERMINATION_REASONS = 11;
    const REFERENCE_COUNSELING_SESSION_TYPES = 12;
    const REFERENCE_EDUCATION_LEVELS = 13;
    const REFERENCE_FINANCE_TYPES = 14;
    const REFERENCE_GROUP_SESSION_TYPES = 15;
    const REFERENCE_HOME_MAINTENANCE_COUNSELING_OUTCOMES = 16;
    const REFERENCE_HOMELESS_COUNSELING_OUTCOMES = 17;
    const REFERENCE_HUD_ASSISTANCE_TYPES = 18;
    const REFERENCE_HUD_GRANT_TYPES = 19;
    const REFERENCE_INCOME_LEVELS = 20;
    const REFERENCE_MORTGAGE_DELINQUENCY_COUNSELING_OUTCOMES = 21;
    const REFERENCE_PREPURCHASE_COUNSELING_OUTCOMES = 22;
    const REFERENCE_REFERRED_BY_TYPES = 23;
    const REFERENCE_RENTAL_COUNSELING_OUTCOMES = 24;
    const REFERENCE_CONTACT_TITLES = 25;
    const REFERENCE_TRAINING_ORGANIZATIONS = 26;
    const REFERENCE_TRAINING_SPONSORS = 27;
    const REFERENCE_FISCAL_YEARS = 28;
    const REFERENCE_REPORT_PERIODS = 29;
    const REFERENCE_COUNSELING_METHODS = 30;
    const REFERENCE_COUNSELING_PURPOSES = 31;
    const REFERENCE_CREDIT_SCORE_SOURCES = 32;
    const REFERENCE_MISSING_CREDIT_SCORE_REASONS = 33;
    const REFERENCE_HEAD_OF_HOUSEHOLD_TYPES = 34;
    const REFERENCE_LOAN_INTAKE_TYPES = 35;
    const REFERENCE_COUNSELOR_SERVICE_TYPES = 36;
    public function __construct(SoapClient $soapClient, $agencyId, $xmlNamespace = 'http://service.arm.hud.gov/')
    {
        $this->soapClient = $soapClient;
        $this->agencyId = $agencyId;
        $this->xmlNamespace = $xmlNamespace;
    }

    public function ping()
    {
        return strpos($this->soapPing(), (string) $this->agencyId) !== false;
    }

    public function getStatesReferences() {
        return $this->getReference(static::REFERENCE_STATES);
    }

    public function getLanguagesReferences() {
        return $this->getReference(static::REFERENCE_LANGUAGES);
    }

    public function getRacesReferences() {
        return $this->getReference(static::REFERENCE_RACES);
    }

    public function getEthnicitiesReferences() {
        return $this->getReference(static::REFERENCE_ETHNICITIES);
    }

    public function getMortgageTypesReferences() {
        return $this->getReference(static::REFERENCE_MORTGAGE_TYPES);
    }

    public function getMaritalStatusesReferences() {
        return $this->getReference(static::REFERENCE_MARITAL_STATUSES);
    }

    public function getContactTypesReferences() {
        return $this->getReference(static::REFERENCE_CONTACT_TYPES);
    }

    public function getCmsVendorNamesReferences() {
        return $this->getReference(static::REFERENCE_CMS_VENDOR_NAMES);
    }

    public function getCounselingTerminationReasonsReferences() {
        return $this->getReference(static::REFERENCE_COUNSELING_TERMINATION_REASONS);
    }

    public function getCounselingSessionTypesReferences() {
        return $this->getReference(static::REFERENCE_COUNSELING_SESSION_TYPES);
    }

    public function getEducationLevelsReferences() {
        return $this->getReference(static::REFERENCE_EDUCATION_LEVELS);
    }

    public function getFinanceTypesReferences() {
        return $this->getReference(static::REFERENCE_FINANCE_TYPES);
    }

    public function getGroupSessionTypesReferences() {
        return $this->getReference(static::REFERENCE_GROUP_SESSION_TYPES);
    }

    public function getHomeMaintenanceCounselingOutcomesReferences() {
        return $this->getReference(static::REFERENCE_HOME_MAINTENANCE_COUNSELING_OUTCOMES);
    }

    public function getHomelessCounselingOutcomesReferences() {
        return $this->getReference(static::REFERENCE_HOMELESS_COUNSELING_OUTCOMES);
    }

    public function getHudAssistanceTypesReferences() {
        return $this->getReference(static::REFERENCE_HUD_ASSISTANCE_TYPES);
    }

    public function getHudGrantTypesReferences() {
        return $this->getReference(static::REFERENCE_HUD_GRANT_TYPES);
    }

    public function getIncomeLevelsReferences() {
        return $this->getReference(static::REFERENCE_INCOME_LEVELS);
    }

    public function getMortgageDelinquencyCounselingOutcomesReferences() {
        return $this->getReference(static::REFERENCE_MORTGAGE_DELINQUENCY_COUNSELING_OUTCOMES);
    }

    public function getPrepurchaseCounselingOutcomesReferences() {
        return $this->getReference(static::REFERENCE_PREPURCHASE_COUNSELING_OUTCOMES);
    }

    public function getReferredByTypesReferences() {
        return $this->getReference(static::REFERENCE_REFERRED_BY_TYPES);
    }

    public function getRentalCounselingOutcomesReferences() {
        return $this->getReference(static::REFERENCE_RENTAL_COUNSELING_OUTCOMES);
    }

    public function getContactTitlesReferences() {
        return $this->getReference(static::REFERENCE_CONTACT_TITLES);
    }

    public function getTrainingOrganizationsReferences() {
        return $this->getReference(static::REFERENCE_TRAINING_ORGANIZATIONS);
    }

    public function getTrainingSponsorsReferences() {
        return $this->getReference(static::REFERENCE_TRAINING_SPONSORS);
    }

    public function getFiscalYearsReferences() {
        return $this->getReference(static::REFERENCE_FISCAL_YEARS);
    }

    public function getReportPeriodsReferences() {
        return $this->getReference(static::REFERENCE_REPORT_PERIODS);
    }

    public function getCounselingMethodsReferences() {
        return $this->getReference(static::REFERENCE_COUNSELING_METHODS);
    }

    public function getCounselingPurposesReferences() {
        return $this->getReference(static::REFERENCE_COUNSELING_PURPOSES);
    }

    public function getCreditScoreSourcesReferences() {
        return $this->getReference(static::REFERENCE_CREDIT_SCORE_SOURCES);
    }

    public function getMissingCreditScoreReasonsReferences() {
        return $this->getReference(static::REFERENCE_MISSING_CREDIT_SCORE_REASONS);
    }

    public function getHeadOfHouseholdTypesReferences() {
        return $this->getReference(static::REFERENCE_HEAD_OF_HOUSEHOLD_TYPES);
    }

    public function getLoanIntakeTypesReferences() {
        return $this->getReference(static::REFERENCE_LOAN_INTAKE_TYPES);
    }

    public function getCounselorServiceTypesReferences() {
        return $this->getReference(static::REFERENCE_COUNSELOR_SERVICE_TYPES);
    }

    private function getReference($referenceId)
    {
        return $this->soapGetReference($referenceId);
    }

    public function soapPing()
    {
        return $this->soapClient->ping(array(
            'agcHcsId' => $this->agcHcsId(),
        ));
    }

    public function soapGetAllReferenceItems()
    {
        $response = $this->soapClient->getAllReferenceItems(array(
            'agcHcsId' => $this->agcHcsId(),
        ));

        $referenceGroups = array();

        foreach ($response->referenceItemGroup as $referenceGroup) {
            $referenceGroups[$referenceGroup->groupId] = array_map(function ($referenceItem) {
                return new ReferenceItem(
                    $referenceItem->id,
                    $referenceItem->name,
                    $referenceItem->shortDesc,
                    $referenceItem->longDesc
                );
            }, $referenceGroup->referenceItem);
        }

        return $referenceGroups;
    }

    public function soapGetReference($referenceId)
    {
        $response = $this->soapClient->getReference(array(
            'agcHcsId' => $this->agcHcsId(),
            'referenceId' => $this->generateStringSoapVar('referenceId', $referenceId),
        ));

        return array_map(function ($referenceItem) {
            return new ReferenceItem(
                $referenceItem->id,
                $referenceItem->name,
                isset($referenceItem->shortDesc) ? $referenceItem->shortDesc : null,
                isset($referenceItem->longDesc) ? $referenceItem->longDesc : null
            );
        }, $response->referenceItem);
    }

    public function soapGetReferenceGroupNames()
    {
        $response = $this->soapClient->getReferenceGroupNames(array(
            'agcHcsId' => $this->agcHcsId(),
        ));

        $referenceGroupNames = array();

        foreach ($response->referenceGroup as $referenceGroup) {
            $referenceGroupNames[$referenceGroup->id] = new ReferenceGroupName(
                $referenceGroup->name
            );
        }

        return $referenceGroupNames;
    }

    private function agcHcsId()
    {
        if (null === $this->soapVarAgcHcsId) {
            $this->soapVarAgcHcsId = $this->generateStringSoapVar('agcHcsId', $this->agencyId);
        }

        return $this->soapVarAgcHcsId;
    }

    private function generateStringSoapVar($name, $value)
    {
        return new SoapVar($value, XSD_STRING, null, null, $name, $this->xmlNamespace);
    }
}
