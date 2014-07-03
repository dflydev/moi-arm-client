<?php

namespace Moi\Arm\Client;

interface ArmClient
{
    public function ping();

    public function getStatesReferences();
    public function getLanguagesReferences();
    public function getRacesReferences();
    public function getEthnicitiesReferences();
    public function getMortgageTypesReferences();
    public function getMaritalStatusesReferences();
    public function getContactTypesReferences();
    public function getCmsVendorNamesReferences();
    public function getCounselingTerminationReasonsReferences();
    public function getCounselingSessionTypesReferences();
    public function getEducationLevelsReferences();
    public function getFinanceTypesReferences();
    public function getGroupSessionTypesReferences();
    public function getHomeMaintenanceCounselingOutcomesReferences();
    public function getHomelessCounselingOutcomesReferences();
    public function getHudAssistanceTypesReferences();
    public function getHudGrantTypesReferences();
    public function getIncomeLevelsReferences();
    public function getMortgageDelinquencyCounselingOutcomesReferences();
    public function getPrepurchaseCounselingOutcomesReferences();
    public function getReferredByTypesReferences();
    public function getRentalCounselingOutcomesReferences();
    public function getContactTitlesReferences();
    public function getTrainingOrganizationsReferences();
    public function getTrainingSponsorsReferences();
    public function getFiscalYearsReferences();
    public function getReportPeriodsReferences();
    public function getCounselingMethodsReferences();
    public function getCounselingPurposesReferences();
    public function getCreditScoreSourcesReferences();
    public function getMissingCreditScoreReasonsReferences();
    public function getHeadOfHouseholdTypesReferences();
    public function getLoanIntakeTypesReferences();
    public function getCounselorServiceTypesReferences();
}
