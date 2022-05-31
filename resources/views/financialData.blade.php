@extends('layout.app')
@section('title', 'Financial Data')

@section('content')
<section class="section profile">
    <div class="row">
    <div class="col-xl-12">

      <div class="card">
        <div class="card-body">
          <div class="row">
          <div class="col-9">
            <input type="text" class="form-control" id="search" value="AAPL" oninput="this.value = this.value.toUpperCase()"/>
          </div>
          <div class="col-3 d-grid gap-2">
            <button type="button" class="btn btn-primary" onclick="stockSearch()">Search</button>
          </div>
          </div>

        </div>
      </div>

      <div class="card" id="wdata">
            <div class="card-body pt-4">
              <h5 class="card-title">Stock Ticker : <span id="company-ticker">AAPL</span></h5>
              <ul class="nav nav-tabs nav-tabs-bordered">
      
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cashflow">Cashflow Statement</button>
                </li>
      
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#income">Income Statement</button>
                </li>
      
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#balance">Balance Sheet</button>
                </li>
                
                <li class="nav-item">
                  <button class="nav-link ratio-tab" data-bs-toggle="tab" data-bs-target="#ratio">Ratio</button>
                </li>
      
              </ul>
              <div class="tab-content pt-3">
      
                <div class="tab-pane fade show active pt-3" id="cashflow">
                  <div class="cashflow-holder data">
                    <table class="d-init table">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="cashflow-calendarYear-0"></th>
                        <th class="centered" id="cashflow-calendarYear-1"></th>
                        <th class="centered" id="cashflow-calendarYear-2"></th>
                        <th class="centered" id="cashflow-calendarYear-3"></th>
                        <th class="centered" id="cashflow-calendarYear-4"></th>
                        <th class="centered" id=""></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th class="nTotal">Net Income</th>
                        <td id="cashflow-netIncome-0"></td>
                        <td id="cashflow-netIncome-1"></td>
                        <td id="cashflow-netIncome-2"></td>
                        <td id="cashflow-netIncome-3"></td>
                        <td id="cashflow-netIncome-4"></td>
                        <td id="cashflow-netIncome" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Depreciation & Amortization</th>
                        <td id="cashflow-depreciationAndAmortization-0"></td>
                        <td id="cashflow-depreciationAndAmortization-1"></td>
                        <td id="cashflow-depreciationAndAmortization-2"></td>
                        <td id="cashflow-depreciationAndAmortization-3"></td>
                        <td id="cashflow-depreciationAndAmortization-4"></td>
                        <td id="cashflow-depreciationAndAmortization" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Deferred Income Tax</th>
                        <td id="cashflow-deferredIncomeTax-0"></td>
                        <td id="cashflow-deferredIncomeTax-1"></td>
                        <td id="cashflow-deferredIncomeTax-2"></td>
                        <td id="cashflow-deferredIncomeTax-3"></td>
                        <td id="cashflow-deferredIncomeTax-4"></td>
                        <td id="cashflow-deferredIncomeTax" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Stock Based Compensation</th>
                        <td id="cashflow-stockBasedCompensation-0"></td>
                        <td id="cashflow-stockBasedCompensation-1"></td>
                        <td id="cashflow-stockBasedCompensation-2"></td>
                        <td id="cashflow-stockBasedCompensation-3"></td>
                        <td id="cashflow-stockBasedCompensation-4"></td>
                        <td id="cashflow-stockBasedCompensation" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Change In Working Capital</th>
                        <td id="cashflow-changeInWorkingCapital-0"></td>
                        <td id="cashflow-changeInWorkingCapital-1"></td>
                        <td id="cashflow-changeInWorkingCapital-2"></td>
                        <td id="cashflow-changeInWorkingCapital-3"></td>
                        <td id="cashflow-changeInWorkingCapital-4"></td>
                        <td id="cashflow-changeInWorkingCapital" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Account Receivables</th>
                        <td id="cashflow-accountsReceivables-0"></td>
                        <td id="cashflow-accountsReceivables-1"></td>
                        <td id="cashflow-accountsReceivables-2"></td>
                        <td id="cashflow-accountsReceivables-3"></td>
                        <td id="cashflow-accountsReceivables-4"></td>
                        <td id="cashflow-accountsReceivables" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Inventory</th>
                        <td id="cashflow-inventory-0"></td>
                        <td id="cashflow-inventory-1"></td>
                        <td id="cashflow-inventory-2"></td>
                        <td id="cashflow-inventory-3"></td>
                        <td id="cashflow-inventory-4"></td>
                        <td id="cashflow-inventory" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Account Payables</th>
                        <td id="cashflow-accountsPayables-0"></td>
                        <td id="cashflow-accountsPayables-1"></td>
                        <td id="cashflow-accountsPayables-2"></td>
                        <td id="cashflow-accountsPayables-3"></td>
                        <td id="cashflow-accountsPayables-4"></td>
                        <td id="cashflow-accountsPayables" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Working Capital</th>
                        <td id="cashflow-otherWorkingCapital-0"></td>
                        <td id="cashflow-otherWorkingCapital-1"></td>
                        <td id="cashflow-otherWorkingCapital-2"></td>
                        <td id="cashflow-otherWorkingCapital-3"></td>
                        <td id="cashflow-otherWorkingCapital-4"></td>
                        <td id="cashflow-otherWorkingCapital" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Non Cash Items</th>
                        <td id="cashflow-otherNonCashItems-0"></td>
                        <td id="cashflow-otherNonCashItems-1"></td>
                        <td id="cashflow-otherNonCashItems-2"></td>
                        <td id="cashflow-otherNonCashItems-3"></td>
                        <td id="cashflow-otherNonCashItems-4"></td>
                        <td id="cashflow-otherNonCashItems" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Provided By Operating Activities</th>
                        <td id="cashflow-netCashProvidedByOperatingActivities-0"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-1"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-2"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-3"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-4"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Investments In Property Plant & Equipment</th>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-0"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-1"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-2"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-3"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-4"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Acquisitions (Net)</th>
                        <td id="cashflow-acquisitionsNet-0"></td>
                        <td id="cashflow-acquisitionsNet-1"></td>
                        <td id="cashflow-acquisitionsNet-2"></td>
                        <td id="cashflow-acquisitionsNet-3"></td>
                        <td id="cashflow-acquisitionsNet-4"></td>
                        <td id="cashflow-acquisitionsNet" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Purchases Of Investments</th>
                        <td id="cashflow-purchasesOfInvestments-0"></td>
                        <td id="cashflow-purchasesOfInvestments-1"></td>
                        <td id="cashflow-purchasesOfInvestments-2"></td>
                        <td id="cashflow-purchasesOfInvestments-3"></td>
                        <td id="cashflow-purchasesOfInvestments-4"></td>
                        <td id="cashflow-purchasesOfInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Sales Maturities Of Investments</th>
                        <td id="cashflow-salesMaturitiesOfInvestments-0"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-1"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-2"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-3"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-4"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Investing Activities</th>
                        <td id="cashflow-otherInvestingActivites-0"></td>
                        <td id="cashflow-otherInvestingActivites-1"></td>
                        <td id="cashflow-otherInvestingActivites-2"></td>
                        <td id="cashflow-otherInvestingActivites-3"></td>
                        <td id="cashflow-otherInvestingActivites-4"></td>
                        <td id="cashflow-otherInvestingActivites" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Used for Investing Activities</th>
                        <td id="cashflow-netCashUsedForInvestingActivites-0"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-1"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-2"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-3"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-4"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Debt Repayment</th>
                        <td id="cashflow-debtRepayment-0"></td>
                        <td id="cashflow-debtRepayment-1"></td>
                        <td id="cashflow-debtRepayment-2"></td>
                        <td id="cashflow-debtRepayment-3"></td>
                        <td id="cashflow-debtRepayment-4"></td>
                        <td id="cashflow-debtRepayment" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Common Stock Issued</th>
                        <td id="cashflow-commonStockIssued-0"></td>
                        <td id="cashflow-commonStockIssued-1"></td>
                        <td id="cashflow-commonStockIssued-2"></td>
                        <td id="cashflow-commonStockIssued-3"></td>
                        <td id="cashflow-commonStockIssued-4"></td>
                        <td id="cashflow-commonStockIssued" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Common Stock Repurchased</th>
                        <td id="cashflow-commonStockRepurchased-0"></td>
                        <td id="cashflow-commonStockRepurchased-1"></td>
                        <td id="cashflow-commonStockRepurchased-2"></td>
                        <td id="cashflow-commonStockRepurchased-3"></td>
                        <td id="cashflow-commonStockRepurchased-4"></td>
                        <td id="cashflow-commonStockRepurchased" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Dividend Paid</th>
                        <td id="cashflow-dividendsPaid-0"></td>
                        <td id="cashflow-dividendsPaid-1"></td>
                        <td id="cashflow-dividendsPaid-2"></td>
                        <td id="cashflow-dividendsPaid-3"></td>
                        <td id="cashflow-dividendsPaid-4"></td>
                        <td id="cashflow-dividendsPaid" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Financing Activities</th>
                        <td id="cashflow-otherFinancingActivites-0"></td>
                        <td id="cashflow-otherFinancingActivites-1"></td>
                        <td id="cashflow-otherFinancingActivites-2"></td>
                        <td id="cashflow-otherFinancingActivites-3"></td>
                        <td id="cashflow-otherFinancingActivites-4"></td>
                        <td id="cashflow-otherFinancingActivites" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Used Provided By Financing Activities</th>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-0"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-1"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-2"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-3"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-4"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Effect of Forex Changes on Cash</th>
                        <td id="cashflow-effectOfForexChangesOnCash-0"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-1"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-2"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-3"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-4"></td>
                        <td id="cashflow-effectOfForexChangesOnCash" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Changes in Cash</th>
                        <td id="cashflow-netChangeInCash-0"></td>
                        <td id="cashflow-netChangeInCash-1"></td>
                        <td id="cashflow-netChangeInCash-2"></td>
                        <td id="cashflow-netChangeInCash-3"></td>
                        <td id="cashflow-netChangeInCash-4"></td>
                        <td id="cashflow-netChangeInCash" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Cash at End of Period</th>
                        <td id="cashflow-cashAtEndOfPeriod-0"></td>
                        <td id="cashflow-cashAtEndOfPeriod-1"></td>
                        <td id="cashflow-cashAtEndOfPeriod-2"></td>
                        <td id="cashflow-cashAtEndOfPeriod-3"></td>
                        <td id="cashflow-cashAtEndOfPeriod-4"></td>
                        <td id="cashflow-cashAtEndOfPeriod" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Cash at Beginning of Period</th>
                        <td id="cashflow-cashAtBeginningOfPeriod-0"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-1"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-2"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-3"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-4"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Operating Cash Flow</th>
                        <td id="cashflow-operatingCashFlow-0"></td>
                        <td id="cashflow-operatingCashFlow-1"></td>
                        <td id="cashflow-operatingCashFlow-2"></td>
                        <td id="cashflow-operatingCashFlow-3"></td>
                        <td id="cashflow-operatingCashFlow-4"></td>
                        <td id="cashflow-operatingCashFlow" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Capital Expenditure</th>
                        <td id="cashflow-capitalExpenditure-0"></td>
                        <td id="cashflow-capitalExpenditure-1"></td>
                        <td id="cashflow-capitalExpenditure-2"></td>
                        <td id="cashflow-capitalExpenditure-3"></td>
                        <td id="cashflow-capitalExpenditure-4"></td>
                        <td id="cashflow-capitalExpenditure" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Free Cash Flow</th>
                        <td id="cashflow-freeCashFlow-0"></td>
                        <td id="cashflow-freeCashFlow-1"></td>
                        <td id="cashflow-freeCashFlow-2"></td>
                        <td id="cashflow-freeCashFlow-3"></td>
                        <td id="cashflow-freeCashFlow-4"></td>
                        <td id="cashflow-freeCashFlow" class="trends"></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="no-data">
                    <h4>Loading...</h4>
                  </div>
                </div>
      
                <div class="tab-pane fade pt-3" id="income">
                  <div class="income-holder data">
                    <table class="d-init table">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="income-calendarYear-0"></th>
                        <th class="centered" id="income-calendarYear-1"></th>
                        <th class="centered" id="income-calendarYear-2"></th>
                        <th class="centered" id="income-calendarYear-3"></th>
                        <th class="centered" id="income-calendarYear-4"></th>
                        <th class="centered" id=""></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th class="nTotal">Revenue</th>
                        <td id="income-revenue-0"></th>
                        <td id="income-revenue-1"></td>
                        <td id="income-revenue-2"></td>
                        <td id="income-revenue-3"></td>
                        <td id="income-revenue-4"></td>
                        <td id="income-revenue" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Cost of Revenue</th>
                        <td id="income-costOfRevenue-0"></th>
                        <td id="income-costOfRevenue-1"></td>
                        <td id="income-costOfRevenue-2"></td>
                        <td id="income-costOfRevenue-3"></td>
                        <td id="income-costOfRevenue-4"></td>
                        <td id="income-costOfRevenue" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Gross Profit</th>
                        <td id="income-grossProfit-0"></th>
                        <td id="income-grossProfit-1"></td>
                        <td id="income-grossProfit-2"></td>
                        <td id="income-grossProfit-3"></td>
                        <td id="income-grossProfit-4"></td>
                        <td id="income-grossProfit" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Gross Profit Ratio</th>
                        <td id="income-grossProfitRatio-0"></th>
                        <td id="income-grossProfitRatio-1"></td>
                        <td id="income-grossProfitRatio-2"></td>
                        <td id="income-grossProfitRatio-3"></td>
                        <td id="income-grossProfitRatio-4"></td>
                        <td id="income-grossProfitRatio" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Research & Development Expenses</th>
                        <td id="income-researchAndDevelopmentExpenses-0"></th>
                        <td id="income-researchAndDevelopmentExpenses-1"></td>
                        <td id="income-researchAndDevelopmentExpenses-2"></td>
                        <td id="income-researchAndDevelopmentExpenses-3"></td>
                        <td id="income-researchAndDevelopmentExpenses-4"></td>
                        <td id="income-researchAndDevelopmentExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>General & Administrative Expenses</th>
                        <td id="income-generalAndAdministrativeExpenses-0"></th>
                        <td id="income-generalAndAdministrativeExpenses-1"></td>
                        <td id="income-generalAndAdministrativeExpenses-2"></td>
                        <td id="income-generalAndAdministrativeExpenses-3"></td>
                        <td id="income-generalAndAdministrativeExpenses-4"></td>
                        <td id="income-generalAndAdministrativeExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Selling & Marketing Expenses</th>
                        <td id="income-sellingAndMarketingExpenses-0"></th>
                        <td id="income-sellingAndMarketingExpenses-1"></td>
                        <td id="income-sellingAndMarketingExpenses-2"></td>
                        <td id="income-sellingAndMarketingExpenses-3"></td>
                        <td id="income-sellingAndMarketingExpenses-4"></td>
                        <td id="income-sellingAndMarketingExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Selling, General & Marketing Expenses</th>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-0"></th>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-1"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-2"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-3"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-4"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Expenses</th>
                        <td id="income-otherExpenses-0"></th>
                        <td id="income-otherExpenses-1"></td>
                        <td id="income-otherExpenses-2"></td>
                        <td id="income-otherExpenses-3"></td>
                        <td id="income-otherExpenses-4"></td>
                        <td id="income-otherExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Operating Expenses</th>
                        <td id="income-operatingExpenses-0"></th>
                        <td id="income-operatingExpenses-1"></td>
                        <td id="income-operatingExpenses-2"></td>
                        <td id="income-operatingExpenses-3"></td>
                        <td id="income-operatingExpenses-4"></td>
                        <td id="income-operatingExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Cost & Expenses</th>
                        <td id="income-costAndExpenses-0"></th>
                        <td id="income-costAndExpenses-1"></td>
                        <td id="income-costAndExpenses-2"></td>
                        <td id="income-costAndExpenses-3"></td>
                        <td id="income-costAndExpenses-4"></td>
                        <td id="income-costAndExpenses" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Interest Income</th>
                        <td id="income-interestIncome-0"></th>
                        <td id="income-interestIncome-1"></td>
                        <td id="income-interestIncome-2"></td>
                        <td id="income-interestIncome-3"></td>
                        <td id="income-interestIncome-4"></td>
                        <td id="income-interestIncome" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Interest Expenses</th>
                        <td id="income-interestExpense-0"></th>
                        <td id="income-interestExpense-1"></td>
                        <td id="income-interestExpense-2"></td>
                        <td id="income-interestExpense-3"></td>
                        <td id="income-interestExpense-4"></td>
                        <td id="income-interestExpense" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Depreciation & Amortization</th>
                        <td id="income-depreciationAndAmortization-0"></th>
                        <td id="income-depreciationAndAmortization-1"></td>
                        <td id="income-depreciationAndAmortization-2"></td>
                        <td id="income-depreciationAndAmortization-3"></td>
                        <td id="income-depreciationAndAmortization-4"></td>
                        <td id="income-depreciationAndAmortization" class="trends"></td>
                      </tr>
                      <tr>
                        <th>EBITDA</th>
                        <td id="income-ebitda-0"></th>
                        <td id="income-ebitda-1"></td>
                        <td id="income-ebitda-2"></td>
                        <td id="income-ebitda-3"></td>
                        <td id="income-ebitda-4"></td>
                        <td id="income-ebitda" class="trends"></td>
                      </tr>
                      <tr>
                        <th>EBITDA Ratio</th>
                        <td id="income-ebitdaratio-0"></th>
                        <td id="income-ebitdaratio-1"></td>
                        <td id="income-ebitdaratio-2"></td>
                        <td id="income-ebitdaratio-3"></td>
                        <td id="income-ebitdaratio-4"></td>
                        <td id="income-ebitdaratio" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Operating Income</th>
                        <td id="income-operatingIncome-0"></th>
                        <td id="income-operatingIncome-1"></td>
                        <td id="income-operatingIncome-2"></td>
                        <td id="income-operatingIncome-3"></td>
                        <td id="income-operatingIncome-4"></td>
                        <td id="income-operatingIncome" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Operating Income Ratio</th>
                        <td id="income-operatingIncomeRatio-0"></th>
                        <td id="income-operatingIncomeRatio-1"></td>
                        <td id="income-operatingIncomeRatio-2"></td>
                        <td id="income-operatingIncomeRatio-3"></td>
                        <td id="income-operatingIncomeRatio-4"></td>
                        <td id="income-operatingIncomeRatio" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Other Income Expenses (Net)</th>
                        <td id="income-totalOtherIncomeExpensesNet-0"></th>
                        <td id="income-totalOtherIncomeExpensesNet-1"></td>
                        <td id="income-totalOtherIncomeExpensesNet-2"></td>
                        <td id="income-totalOtherIncomeExpensesNet-3"></td>
                        <td id="income-totalOtherIncomeExpensesNet-4"></td>
                        <td id="income-totalOtherIncomeExpensesNet" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Income Before Tax</th>
                        <td id="income-incomeBeforeTax-0"></th>
                        <td id="income-incomeBeforeTax-1"></td>
                        <td id="income-incomeBeforeTax-2"></td>
                        <td id="income-incomeBeforeTax-3"></td>
                        <td id="income-incomeBeforeTax-4"></td>
                        <td id="income-incomeBeforeTax" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Income Before Tax Ratio</th>
                        <td id="income-incomeBeforeTaxRatio-0"></th>
                        <td id="income-incomeBeforeTaxRatio-1"></td>
                        <td id="income-incomeBeforeTaxRatio-2"></td>
                        <td id="income-incomeBeforeTaxRatio-3"></td>
                        <td id="income-incomeBeforeTaxRatio-4"></td>
                        <td id="income-incomeBeforeTaxRatio" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Income Tax Expenses</th>
                        <td id="income-incomeTaxExpense-0"></th>
                        <td id="income-incomeTaxExpense-1"></td>
                        <td id="income-incomeTaxExpense-2"></td>
                        <td id="income-incomeTaxExpense-3"></td>
                        <td id="income-incomeTaxExpense-4"></td>
                        <td id="income-incomeTaxExpense" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Net Income</th>
                        <td id="income-netIncome-0"></th>
                        <td id="income-netIncome-1"></td>
                        <td id="income-netIncome-2"></td>
                        <td id="income-netIncome-3"></td>
                        <td id="income-netIncome-4"></td>
                        <td id="income-netIncome" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Income Ratio</th>
                        <td id="income-netIncomeRatio-0"></th>
                        <td id="income-netIncomeRatio-1"></td>
                        <td id="income-netIncomeRatio-2"></td>
                        <td id="income-netIncomeRatio-3"></td>
                        <td id="income-netIncomeRatio-4"></td>
                        <td id="income-netIncomeRatio" class="trends"></td>
                      </tr>
                      <tr>
                        <th>EPS</th>
                        <td id="income-eps-0"></th>
                        <td id="income-eps-1"></td>
                        <td id="income-eps-2"></td>
                        <td id="income-eps-3"></td>
                        <td id="income-eps-4"></td>
                        <td id="income-eps" class="trends"></td>
                      </tr>
                      <tr>
                        <th>EPS Diluted</th>
                        <td id="income-epsdiluted-0"></th>
                        <td id="income-epsdiluted-1"></td>
                        <td id="income-epsdiluted-2"></td>
                        <td id="income-epsdiluted-3"></td>
                        <td id="income-epsdiluted-4"></td>
                        <td id="income-epsdiluted" class="trends"></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="no-data">
                    <h4>Loading...</h4>
                  </div>
                </div>
      
                <div class="tab-pane fade pt-3" id="balance">
                  <div class="balance-holder data">
                    <table class="d-init table">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="balance-calendarYear-0"></th>
                        <th class="centered" id="balance-calendarYear-1"></th>
                        <th class="centered" id="balance-calendarYear-2"></th>
                        <th class="centered" id="balance-calendarYear-3"></th>
                        <th class="centered" id="balance-calendarYear-4"></th>
                        <th class="centered" id=""></th>
                      </tr>
                      </thead>
                      <tbody>                    
                      <tr>
                        <th>Cash & Cash Equivalents</th>
                        <td id="balance-cashAndCashEquivalents-0"></td>
                        <td id="balance-cashAndCashEquivalents-1"></td>
                        <td id="balance-cashAndCashEquivalents-2"></td>
                        <td id="balance-cashAndCashEquivalents-3"></td>
                        <td id="balance-cashAndCashEquivalents-4"></td>
                        <td id="balance-cashAndCashEquivalents" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Short Term Investments</th>
                        <td id="balance-shortTermInvestments-0"></td>
                        <td id="balance-shortTermInvestments-1"></td>
                        <td id="balance-shortTermInvestments-2"></td>
                        <td id="balance-shortTermInvestments-3"></td>
                        <td id="balance-shortTermInvestments-4"></td>
                        <td id="balance-shortTermInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Cash & Short Term Investments</th>
                        <td id="balance-cashAndShortTermInvestments-0"></td>
                        <td id="balance-cashAndShortTermInvestments-1"></td>
                        <td id="balance-cashAndShortTermInvestments-2"></td>
                        <td id="balance-cashAndShortTermInvestments-3"></td>
                        <td id="balance-cashAndShortTermInvestments-4"></td>
                        <td id="balance-cashAndShortTermInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Receivables</th>
                        <td id="balance-netReceivables-0"></td>
                        <td id="balance-netReceivables-1"></td>
                        <td id="balance-netReceivables-2"></td>
                        <td id="balance-netReceivables-3"></td>
                        <td id="balance-netReceivables-4"></td>
                        <td id="balance-netReceivables" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Inventory</th>
                        <td id="balance-inventory-0"></td>
                        <td id="balance-inventory-1"></td>
                        <td id="balance-inventory-2"></td>
                        <td id="balance-inventory-3"></td>
                        <td id="balance-inventory-4"></td>
                        <td id="balance-inventory" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Current Assets</th>
                        <td id="balance-otherCurrentAssets-0"></td>
                        <td id="balance-otherCurrentAssets-1"></td>
                        <td id="balance-otherCurrentAssets-2"></td>
                        <td id="balance-otherCurrentAssets-3"></td>
                        <td id="balance-otherCurrentAssets-4"></td>
                        <td id="balance-otherCurrentAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Current Assets</th>
                        <td id="balance-totalCurrentAssets-0"></td>
                        <td id="balance-totalCurrentAssets-1"></td>
                        <td id="balance-totalCurrentAssets-2"></td>
                        <td id="balance-totalCurrentAssets-3"></td>
                        <td id="balance-totalCurrentAssets-4"></td>
                        <td id="balance-totalCurrentAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Property Plant Equipment</th>
                        <td id="balance-propertyPlantEquipmentNet-0"></td>
                        <td id="balance-propertyPlantEquipmentNet-1"></td>
                        <td id="balance-propertyPlantEquipmentNet-2"></td>
                        <td id="balance-propertyPlantEquipmentNet-3"></td>
                        <td id="balance-propertyPlantEquipmentNet-4"></td>
                        <td id="balance-propertyPlantEquipmentNet" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Good Will</th>
                        <td id="balance-goodwill-0"></td>
                        <td id="balance-goodwill-1"></td>
                        <td id="balance-goodwill-2"></td>
                        <td id="balance-goodwill-3"></td>
                        <td id="balance-goodwill-4"></td>
                        <td id="balance-goodwill" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Intangible Assets</th>
                        <td id="balance-intangibleAssets-0"></td>
                        <td id="balance-intangibleAssets-1"></td>
                        <td id="balance-intangibleAssets-2"></td>
                        <td id="balance-intangibleAssets-3"></td>
                        <td id="balance-intangibleAssets-4"></td>
                        <td id="balance-intangibleAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Good Will & Intangible Assets</th>
                        <td id="balance-goodwillAndIntangibleAssets-0"></td>
                        <td id="balance-goodwillAndIntangibleAssets-1"></td>
                        <td id="balance-goodwillAndIntangibleAssets-2"></td>
                        <td id="balance-goodwillAndIntangibleAssets-3"></td>
                        <td id="balance-goodwillAndIntangibleAssets-4"></td>
                        <td id="balance-goodwillAndIntangibleAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Long Term Investments</th>
                        <td id="balance-longTermInvestments-0"></td>
                        <td id="balance-longTermInvestments-1"></td>
                        <td id="balance-longTermInvestments-2"></td>
                        <td id="balance-longTermInvestments-3"></td>
                        <td id="balance-longTermInvestments-4"></td>
                        <td id="balance-longTermInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Tax Assets</th>
                        <td id="balance-taxAssets-0"></td>
                        <td id="balance-taxAssets-1"></td>
                        <td id="balance-taxAssets-2"></td>
                        <td id="balance-taxAssets-3"></td>
                        <td id="balance-taxAssets-4"></td>
                        <td id="balance-taxAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Non Current Assets</th>
                        <td id="balance-otherNonCurrentAssets-0"></td>
                        <td id="balance-otherNonCurrentAssets-1"></td>
                        <td id="balance-otherNonCurrentAssets-2"></td>
                        <td id="balance-otherNonCurrentAssets-3"></td>
                        <td id="balance-otherNonCurrentAssets-4"></td>
                        <td id="balance-otherNonCurrentAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Non Current Assets</th>
                        <td id="balance-totalNonCurrentAssets-0"></td>
                        <td id="balance-totalNonCurrentAssets-1"></td>
                        <td id="balance-totalNonCurrentAssets-2"></td>
                        <td id="balance-totalNonCurrentAssets-3"></td>
                        <td id="balance-totalNonCurrentAssets-4"></td>
                        <td id="balance-totalNonCurrentAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Assets</th>
                        <td id="balance-otherAssets-0"></td>
                        <td id="balance-otherAssets-1"></td>
                        <td id="balance-otherAssets-2"></td>
                        <td id="balance-otherAssets-3"></td>
                        <td id="balance-otherAssets-4"></td>
                        <td id="balance-otherAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Assets</th>
                        <td id="balance-totalAssets-0"></td>
                        <td id="balance-totalAssets-1"></td>
                        <td id="balance-totalAssets-2"></td>
                        <td id="balance-totalAssets-3"></td>
                        <td id="balance-totalAssets-4"></td>
                        <td id="balance-totalAssets" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Account Payables</th>
                        <td id="balance-accountPayables-0"></td>
                        <td id="balance-accountPayables-1"></td>
                        <td id="balance-accountPayables-2"></td>
                        <td id="balance-accountPayables-3"></td>
                        <td id="balance-accountPayables-4"></td>
                        <td id="balance-accountPayables" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Short Term Debt</th>
                        <td id="balance-shortTermDebt-0"></td>
                        <td id="balance-shortTermDebt-1"></td>
                        <td id="balance-shortTermDebt-2"></td>
                        <td id="balance-shortTermDebt-3"></td>
                        <td id="balance-shortTermDebt-4"></td>
                        <td id="balance-shortTermDebt" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Tax Payables</th>
                        <td id="balance-taxPayables-0"></td>
                        <td id="balance-taxPayables-1"></td>
                        <td id="balance-taxPayables-2"></td>
                        <td id="balance-taxPayables-3"></td>
                        <td id="balance-taxPayables-4"></td>
                        <td id="balance-taxPayables" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Deferred Revenue</th>
                        <td id="balance-deferredRevenue-0"></td>
                        <td id="balance-deferredRevenue-1"></td>
                        <td id="balance-deferredRevenue-2"></td>
                        <td id="balance-deferredRevenue-3"></td>
                        <td id="balance-deferredRevenue-4"></td>
                        <td id="balance-deferredRevenue" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Current Liabilities</th>
                        <td id="balance-otherCurrentLiabilities-0"></td>
                        <td id="balance-otherCurrentLiabilities-1"></td>
                        <td id="balance-otherCurrentLiabilities-2"></td>
                        <td id="balance-otherCurrentLiabilities-3"></td>
                        <td id="balance-otherCurrentLiabilities-4"></td>
                        <td id="balance-otherCurrentLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Current Liabilities</th>
                        <td id="balance-totalCurrentLiabilities-0"></td>
                        <td id="balance-totalCurrentLiabilities-1"></td>
                        <td id="balance-totalCurrentLiabilities-2"></td>
                        <td id="balance-totalCurrentLiabilities-3"></td>
                        <td id="balance-totalCurrentLiabilities-4"></td>
                        <td id="balance-totalCurrentLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Long Term Debt</th>
                        <td id="balance-longTermDebt-0"></td>
                        <td id="balance-longTermDebt-1"></td>
                        <td id="balance-longTermDebt-2"></td>
                        <td id="balance-longTermDebt-3"></td>
                        <td id="balance-longTermDebt-4"></td>
                        <td id="balance-longTermDebt" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Deferred Revenue (Non Current)</th>
                        <td id="balance-deferredRevenueNonCurrent-0"></td>
                        <td id="balance-deferredRevenueNonCurrent-1"></td>
                        <td id="balance-deferredRevenueNonCurrent-2"></td>
                        <td id="balance-deferredRevenueNonCurrent-3"></td>
                        <td id="balance-deferredRevenueNonCurrent-4"></td>
                        <td id="balance-deferredRevenueNonCurrent" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Deferred Tax Liabilities (Non Current)</th>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-0"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-1"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-2"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-3"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-4"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Non Current Liabilities</th>
                        <td id="balance-otherNonCurrentLiabilities-0"></td>
                        <td id="balance-otherNonCurrentLiabilities-1"></td>
                        <td id="balance-otherNonCurrentLiabilities-2"></td>
                        <td id="balance-otherNonCurrentLiabilities-3"></td>
                        <td id="balance-otherNonCurrentLiabilities-4"></td>
                        <td id="balance-otherNonCurrentLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Non Current Liabilities</th>
                        <td id="balance-totalNonCurrentLiabilities-0"></td>
                        <td id="balance-totalNonCurrentLiabilities-1"></td>
                        <td id="balance-totalNonCurrentLiabilities-2"></td>
                        <td id="balance-totalNonCurrentLiabilities-3"></td>
                        <td id="balance-totalNonCurrentLiabilities-4"></td>
                        <td id="balance-totalNonCurrentLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Liabilities</th>
                        <td id="balance-otherLiabilities-0"></td>
                        <td id="balance-otherLiabilities-1"></td>
                        <td id="balance-otherLiabilities-2"></td>
                        <td id="balance-otherLiabilities-3"></td>
                        <td id="balance-otherLiabilities-4"></td>
                        <td id="balance-otherLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Capital Lease Obligations</th>
                        <td id="balance-capitalLeaseObligations-0"></td>
                        <td id="balance-capitalLeaseObligations-1"></td>
                        <td id="balance-capitalLeaseObligations-2"></td>
                        <td id="balance-capitalLeaseObligations-3"></td>
                        <td id="balance-capitalLeaseObligations-4"></td>
                        <td id="balance-capitalLeaseObligations" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Liabilities</th>
                        <td id="balance-totalLiabilities-0"></td>
                        <td id="balance-totalLiabilities-1"></td>
                        <td id="balance-totalLiabilities-2"></td>
                        <td id="balance-totalLiabilities-3"></td>
                        <td id="balance-totalLiabilities-4"></td>
                        <td id="balance-totalLiabilities" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Preferred Stock</th>
                        <td id="balance-preferredStock-0"></td>
                        <td id="balance-preferredStock-1"></td>
                        <td id="balance-preferredStock-2"></td>
                        <td id="balance-preferredStock-3"></td>
                        <td id="balance-preferredStock-4"></td>
                        <td id="balance-preferredStock" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Common Stock</th>
                        <td id="balance-commonStock-0"></td>
                        <td id="balance-commonStock-1"></td>
                        <td id="balance-commonStock-2"></td>
                        <td id="balance-commonStock-3"></td>
                        <td id="balance-commonStock-4"></td>
                        <td id="balance-commonStock" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Retained Earnings</th>
                        <td id="balance-retainedEarnings-0"></td>
                        <td id="balance-retainedEarnings-1"></td>
                        <td id="balance-retainedEarnings-2"></td>
                        <td id="balance-retainedEarnings-3"></td>
                        <td id="balance-retainedEarnings-4"></td>
                        <td id="balance-retainedEarnings" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Accumulated Other Comprehensive Income Loss</th>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-0"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-1"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-2"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-3"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-4"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Other Total Stockholders Equity</th>
                        <td id="balance-othertotalStockholdersEquity-0"></td>
                        <td id="balance-othertotalStockholdersEquity-1"></td>
                        <td id="balance-othertotalStockholdersEquity-2"></td>
                        <td id="balance-othertotalStockholdersEquity-3"></td>
                        <td id="balance-othertotalStockholdersEquity-4"></td>
                        <td id="balance-othertotalStockholdersEquity" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Stockholders Equity</th>
                        <td id="balance-totalStockholdersEquity-0"></td>
                        <td id="balance-totalStockholdersEquity-1"></td>
                        <td id="balance-totalStockholdersEquity-2"></td>
                        <td id="balance-totalStockholdersEquity-3"></td>
                        <td id="balance-totalStockholdersEquity-4"></td>
                        <td id="balance-totalStockholdersEquity" class="trends"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Total Liabilities & Stockholders Equity</th>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-0"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-1"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-2"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-3"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-4"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Minority Interest</th>
                        <td id="balance-minorityInterest-0"></td>
                        <td id="balance-minorityInterest-1"></td>
                        <td id="balance-minorityInterest-2"></td>
                        <td id="balance-minorityInterest-3"></td>
                        <td id="balance-minorityInterest-4"></td>
                        <td id="balance-minorityInterest" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Equity</th>
                        <td id="balance-totalEquity-0"></td>
                        <td id="balance-totalEquity-1"></td>
                        <td id="balance-totalEquity-2"></td>
                        <td id="balance-totalEquity-3"></td>
                        <td id="balance-totalEquity-4"></td>
                        <td id="balance-totalEquity" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Liabilities & Equity</th>
                        <td id="balance-totalLiabilitiesAndTotalEquity-0"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-1"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-2"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-3"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-4"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Investments</th>
                        <td id="balance-totalInvestments-0"></td>
                        <td id="balance-totalInvestments-1"></td>
                        <td id="balance-totalInvestments-2"></td>
                        <td id="balance-totalInvestments-3"></td>
                        <td id="balance-totalInvestments-4"></td>
                        <td id="balance-totalInvestments" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Total Debt</th>
                        <td id="balance-totalDebt-0"></td>
                        <td id="balance-totalDebt-1"></td>
                        <td id="balance-totalDebt-2"></td>
                        <td id="balance-totalDebt-3"></td>
                        <td id="balance-totalDebt-4"></td>
                        <td id="balance-totalDebt" class="trends"></td>
                      </tr>
                      <tr>
                        <th>Net Debt</th>
                        <td id="balance-netDebt-0"></td>
                        <td id="balance-netDebt-1"></td>
                        <td id="balance-netDebt-2"></td>
                        <td id="balance-netDebt-3"></td>
                        <td id="balance-netDebt-4"></td>
                        <td id="balance-netDebt" class="trends"></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="no-data">
                    <h4>Loading...</h4>
                  </div>
                </div>

                <div class="tab-pane fade pt-3" id="ratio">
                  <div class="ratio-holder data">
                    <table class="d-init table">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="ratio-calendarYear-0"></th>
                        <th class="centered" id="ratio-calendarYear-1"></th>
                        <th class="centered" id="ratio-calendarYear-2"></th>
                        <th class="centered" id="ratio-calendarYear-3"></th>
                        <th class="centered" id="ratio-calendarYear-4"></th>
                      </tr>
                      </thead>
                      <tbody>                    
                      <tr>
                        <th class="nTotal" class="nTotal">Debt Ratio</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>Current Ratio</th>
                        <td id="ratio-current-0"></td>
                        <td id="ratio-current-1"></td>
                        <td id="ratio-current-2"></td>
                        <td id="ratio-current-3"></td>
                        <td id="ratio-current-4"></td>
                      </tr>
                      <tr>
                        <th>Debt to Equity Ratio</th>
                        <td id="ratio-dte-0"></td>
                        <td id="ratio-dte-1"></td>
                        <td id="ratio-dte-2"></td>
                        <td id="ratio-dte-3"></td>
                        <td id="ratio-dte-4"></td>
                      </tr>
                      <tr>
                        <th class="nTotal">Profitability Ratio</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>Price to Earning Ratio</th>
                        <td id="ratio-pe-0">-</td>
                        <td id="ratio-pe-1">-</td>
                        <td id="ratio-pe-2">-</td>
                        <td id="ratio-pe-3">-</td>
                        <td id="ratio-pe-4">-</td>
                      </tr>
                      <tr>
                        <th>Price to Book Ratio</th>
                        <td id="ratio-pb-0">-</td>
                        <td id="ratio-pb-1">-</td>
                        <td id="ratio-pb-2">-</td>
                        <td id="ratio-pb-3">-</td>
                        <td id="ratio-pb-4">-</td>
                      </tr>
                      <tr>
                        <th>Price to Cash Flow Ratio</th>
                        <td id="ratio-pc-0">-</td>
                        <td id="ratio-pc-1">-</td>
                        <td id="ratio-pc-2">-</td>
                        <td id="ratio-pc-3">-</td>
                        <td id="ratio-pc-4">-</td>
                      </tr>
                      <tr>
                        <th class="nTotal">Effectiveness Ratio</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>ROE</th>
                        <td id="ratio-roe-0"></td>
                        <td id="ratio-roe-1"></td>
                        <td id="ratio-roe-2"></td>
                        <td id="ratio-roe-3"></td>
                        <td id="ratio-roe-4"></td>
                      </tr>
                      <tr>
                        <th>ROA</th>
                        <td id="ratio-roa-0"></td>
                        <td id="ratio-roa-1"></td>
                        <td id="ratio-roa-2"></td>
                        <td id="ratio-roa-3"></td>
                        <td id="ratio-roa-4"></td>
                      </tr>
                      <tr>
                        <th>ROIC</th>
                        <td id="ratio-roic-0"></td>
                        <td id="ratio-roic-1"></td>
                        <td id="ratio-roic-2"></td>
                        <td id="ratio-roic-3"></td>
                        <td id="ratio-roic-4"></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="no-data">
                    <h4>Loading...</h4>
                  </div>
                </div>
      
              </div>
      
            </div>
      </div>
      </div>

    </div>
</section>
@endsection

<style>
th.centered,td{
  text-align: center;
}

table{
  background:white;
}

tbody tr th:not(.nTotal){
  padding-left:25px;
  font-weight: 500;
}

th,td{
  vertical-align: middle;
}

td{
  border-color:rgba(0,0,0,0.10)!important;
}

table{
  max-width: 100vw;
  width:100vw;
}

.bar.positive {
  fill: steelblue;
}

.bar.negative{
  fill: brown;
}

.trends:hover {
  transform: scale(1.5);
}
.trends {
  transition: all 1s;
  transform-origin: 50% 50%;
  background-color:white;
}

</style>

@section('script')
<script src="https://d3js.org/d3.v5.min.js"></script>

<script>
    internationalNumberFormat = new Intl.NumberFormat('en-US');
    var stock = "AAPL";
    var baseURL = '{{env('API_BASEURL')}}';
    var cfURL = "/api/v3/cash-flow-statement/{symbol}?limit=5&";
    var isURL ="/api/v3/income-statement/{symbol}?limit=5&";
    var bsURL = "/api/v3/balance-sheet-statement/{symbol}?limit=5&";
    var coURL = "/api/v3/profile/{symbol}?";

    var fis = [];
    var fcf = [];
    var fbs = [];
    var cov = [];

    var tokenUrl = "apikey="
    var token = '{{env('API_TOKEN')}}';

    var fcfURL = "";
    var fisURL = "";
    var fbsURL = "";
    var covURL = "";

    const dataBox = Array.from(document.getElementsByClassName('data'));
    const NoDataBox = Array.from(document.getElementsByClassName('no-data'));

    stockSearch();

    function stockSearch(){
      if(document.getElementById('search').value !== ""){
      stock = document.getElementById('search').value;
      document.getElementById('company-ticker').innerHTML = stock;
      
      var svgTD = document.getElementsByClassName("trends");
      for (var i = 0; i < svgTD.length; i++) {
        svgTD[i].innerHTML = "";
      }

      showLoading();

      const LoadingPromise = new Promise(function(resolve,reject){
        urlMaking();
        setTimeout(()=>resolve(),3000);
      });

      LoadingPromise.then(()=>{
        calcRatio();
        drawAllCharts();
        hideLoading();
      }).catch(err => {
        console.log(err);
        if(fis.length == 0 && fbs.length == 0 && fcf.length == 0){
            stock = document.getElementById('search').value;
            document.getElementById('company-ticker').innerHTML = '"'+stock+'" might not exist';
        }else{
            location.reload();
        }
      });
      
      }else{
        alert("Please Insert Stock Ticker");
      }
    }

    function urlMaking(){
      return new Promise(function(resolve, reject) {
      fcfURL = baseURL + cfURL + tokenUrl + token;
      fisURL = baseURL + isURL + tokenUrl + token;
      fbsURL = baseURL + bsURL + tokenUrl + token;
      covURL = baseURL + coURL + tokenUrl + token;

      fcfURL = fcfURL.replace("{symbol}",stock);
      fisURL = fisURL.replace("{symbol}",stock);
      fbsURL = fbsURL.replace("{symbol}",stock);
      covURL = covURL.replace("{symbol}",stock);

      getRequest(fisURL,drawOutputIncome);
      getRequest(fbsURL,drawOutputBalance);
      getRequest(fcfURL,drawOutputCashflow);
      getRequest(covURL,getOutputCompanyOverview);
      
      resolve();
      })
    }
  
    function showLoading(){
      dataBox.forEach(box => {
          box.style.display = 'none';
        });

        NoDataBox.forEach(box => {
          box.style.display = 'block';
        });
    }

    function hideLoading(){
        dataBox.forEach(box => {
          box.style.display = 'block';
        });

        NoDataBox.forEach(box => {
          box.style.display = 'none';
        });

    }

    function getOutputCompanyOverview(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      cov = resp;
      resolve();
    })
    }
    
    function drawOutputIncome(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      fis = resp;
      let financials = resp;

      for (let i = 0; i < financials.length; i++) {
        let financial = financials[i];

        var z = 0;
        for (var key2 in financial) {
          if (financial.hasOwnProperty(key2)) {
          var id = "income-"+key2+"-"+i;
          var el = document.getElementById(id);
          if(el !== null){
            if(id.includes("Year")){
              el.innerHTML = financial[key2];
            }else{
              if(id.includes("Ratio") || id.includes("ratio") || id.includes("eps")){
                el.innerHTML = financial[key2].toFixed(4);
              }else{
                if(financial[key2] === 0){
                  el.innerHTML = "-";
                }else{
                  if(financial[key2] > 0){
                    el.innerHTML = internationalNumberFormat.format((financial[key2]/1000000));
                  }else{
                    el.innerHTML = "("+internationalNumberFormat.format((0-financial[key2]/1000000))+")";
                  }
                }
              }
            }
          }
          }
          z++;
        }
      }
      resolve();
    })
    }

    function drawOutputBalance(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      fbs = resp;
      let financials = resp;

      for (let i = 0; i < financials.length; i++) {
        let financial = financials[i];

        var z = 0;
        for (var key2 in financial) {
          if (financial.hasOwnProperty(key2)) {
            var id = "balance-"+key2+"-"+i;
            var el = document.getElementById(id);
            if(el !== null){
              if(id.includes("Year")){
                el.innerHTML = financial[key2];
              }else{
                if(id.includes("Ratio") || id.includes("ratio") || id.includes("eps")){
                  el.innerHTML = financial[key2].toFixed(4);
                }else{
                  if(financial[key2] === 0){
                    el.innerHTML = "-";
                  }else{
                    if(financial[key2] > 0){
                      el.innerHTML = internationalNumberFormat.format((financial[key2]/1000000));
                    }else{
                      el.innerHTML = "("+internationalNumberFormat.format((0-financial[key2]/1000000))+")";
                    }
                  }
                }
              }
            }
          }
          z++;
        }
      }
      resolve();
    });
    }

    function drawOutputCashflow(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      fcf = resp;
      let financials = resp;

      for (let i = 0; i < financials.length; i++) {
        let financial = financials[i];
        var z = 0;
        for (var key2 in financial) {
          if (financial.hasOwnProperty(key2)) {
            var id = "cashflow-"+key2+"-"+i;
            var el = document.getElementById(id);
            if(el !== null){
              if(id.includes("Year")){
                el.innerHTML = financial[key2];
              }else{
                if(id.includes("Ratio") || id.includes("ratio") || id.includes("eps")){
                  el.innerHTML = financial[key2].toFixed(4);
                }else{
                  if(financial[key2] === 0){
                    el.innerHTML = "-";
                  }else{
                    if(financial[key2] > 0){
                      el.innerHTML = internationalNumberFormat.format((financial[key2]/1000000));
                    }else{
                      el.innerHTML = "("+internationalNumberFormat.format((0-financial[key2]/1000000))+")";
                    }
                  }
                }
              }
            }
          }
          z++;
        }
      }
      resolve();
    });
    }

    function getRequest(url, success) {
      new Promise((resolve, reject) => {
      var req = false;
      try {
        req = new XMLHttpRequest();
      } catch (e) {
        try {
          req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
          try {
            req = new ActiveXObject("Microsoft.XMLHTTP");
          } catch (e) {
            return false;
          }
        }
      }
      if (!req) return false;
      if (typeof success != 'function') success = function() {};
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          if (req.status === 200) {
            success(req.responseText)
          }
        }
      }
      req.open("GET", url, true);
      req.send(null);
      return req;
      });
    }

    function calcRatio(){
      var currentRatio = [];
      var dte = [];
      var pe = [];
      var pb = [];
      var pc = [];
      var roe = [];
      var roa = [];
      var roic = [];

      for(i = 0; i < 5; i++){

        document.getElementById('ratio-calendarYear-'+i).innerHTML = document.getElementById('balance-calendarYear-'+i).innerHTML;
        
        currentRatio[i] = (fbs[i]['totalCurrentAssets'] / fbs[i]["totalCurrentLiabilities"]).toFixed(2);
        document.getElementById("ratio-current-"+i).innerHTML = currentRatio[i];

        dte[i] = (fbs[i]['totalDebt'] / fbs[i]['totalStockholdersEquity']).toFixed(2);
        document.getElementById("ratio-dte-"+i).innerHTML = dte[i];

        if(i == 0){
          pe[i] = (cov[i]['price'] / fis[i]['eps']).toFixed(2);;
          document.getElementById("ratio-pe-0").innerHTML = pe[i];

          pb[i] = (cov[i]['mktCap'] / (fbs[i]['totalAssets'] - fbs[i]['totalLiabilities'])).toFixed(2);;
          document.getElementById("ratio-pb-0").innerHTML = pb[i];

          pc[i] = (cov[i]['mktCap'] / fcf[i]['operatingCashFlow']).toFixed(2);
          document.getElementById("ratio-pc-0").innerHTML = pc[i];

        }

        roe[i] = (fcf[i]['netIncome'] / fbs[i]["totalStockholdersEquity"] * 100).toFixed(2) + "%";
        document.getElementById("ratio-roe-"+i).innerHTML = roe[i];

        roa[i] = (fcf[i]['netIncome'] / fbs[i]["totalAssets"] * 100).toFixed(2) + "%";
        document.getElementById("ratio-roa-"+i).innerHTML = roa[i];
        
        roic[i]= (fis[i]['operatingIncome'] / fbs[i]["totalLiabilitiesAndStockholdersEquity"] * 100).toFixed(2) + "%";
        document.getElementById("ratio-roic-"+i).innerHTML = roic[i];

        }
    }

    function drawAllCharts(){
      let fcfTemp = fcf[0];
        var x = 0;
      let fbsTemp = fbs[0];
        var y = 0;
      let fisTemp = fis[0];
        var z = 0;
      for (var key2 in fcfTemp) {
        var tempData = [];
        if (fcfTemp.hasOwnProperty(key2)) {
        var id = "cashflow-"+key2;
        var el = document.getElementById(id);
          if(el){
            tempData.push(fcf[0][key2]);
            tempData.push(fcf[1][key2]);
            tempData.push(fcf[2][key2]);
            tempData.push(fcf[3][key2]);
            tempData.push(fcf[4][key2]);
            
            drawChart(id,tempData);
          }
        }
        x++;
      }

      for (var key2 in fbsTemp) {
        var tempData = [];
        if (fbsTemp.hasOwnProperty(key2)) {
        var id = "balance-"+key2;
        var el = document.getElementById(id);
          if(el){
            tempData.push(fbs[0][key2]);
            tempData.push(fbs[1][key2]);
            tempData.push(fbs[2][key2]);
            tempData.push(fbs[3][key2]);
            tempData.push(fbs[4][key2]);
            
            drawChart(id,tempData);
          }
        }
        y++;
      }

      for (var key2 in fisTemp) {
        var tempData = [];
        if (fisTemp.hasOwnProperty(key2)) {
        var id = "income-"+key2;
        var el = document.getElementById(id);
          if(el){
            tempData.push(fis[0][key2]);
            tempData.push(fis[1][key2]);
            tempData.push(fis[2][key2]);
            tempData.push(fis[3][key2]);
            tempData.push(fis[4][key2]);
            
            drawChart(id,tempData);
          }
        }
        z++;
      }
    }

    function drawChart(tdName , datArray){
      var maxHeight = 50;
      var maxWidth = 50;
      var margin = 2;

      var svg = d3.select("#"+tdName)
                .append("svg")
                .attr("width", maxWidth)
                .attr("height", maxHeight);
      
      width = maxWidth - margin;
      height = maxHeight - margin;

      var xScale = d3.scaleBand()
                  .domain(d3.range(0, datArray.length))
                  .range([0,width]).padding(0.2);

      var y0 = Math.max(Math.abs(d3.min(datArray)), Math.abs(d3.max(datArray)));

      var yScale = d3.scaleLinear()
                  .domain([-y0, y0])
                  .range([height, 0]);

      svg.append("line")
          .attr("x1",-6)
          .attr("y1",yScale(0))//so that the line passes through the y 0
          .attr("x2",width)
          .attr("y2",yScale(0))//so that the line passes through the y 0
          .style("stroke", "black");

      var g = svg.append("g");

       g.selectAll(".bar")
         .data(datArray)
         .enter().append("rect")
         .attr("class", function(d) { return d < 0 ? "bar negative" : "bar positive"; })
         .attr("x", function(d,i) { return xScale(i); })
         .attr("y", function(d) { return yScale(Math.max(0, d)); })
         .attr("height", function(d) { return Math.abs(yScale(d) - yScale(0)); })
         .attr("width", xScale.bandwidth());
      
    }

</script>
@endsection