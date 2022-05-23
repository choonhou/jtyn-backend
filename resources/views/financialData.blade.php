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
            <input type="text" class="form-control" id="search" value="AAPL"/>
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
      
              </ul>
              <div class="tab-content pt-3">
      
                <div class="tab-pane fade show active pt-3" id="cashflow">
                  <div class="cashflow-holder data">
                    <table class="d-init table table-bordered">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="cashflow-calendarYear-0"></th>
                        <th class="centered" id="cashflow-calendarYear-1"></th>
                        <th class="centered" id="cashflow-calendarYear-2"></th>
                        <th class="centered" id="cashflow-calendarYear-3"></th>
                        <th class="centered" id="cashflow-calendarYear-4"></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th>Net Income</th>
                        <td id="cashflow-netIncome-0"></td>
                        <td id="cashflow-netIncome-1"></td>
                        <td id="cashflow-netIncome-2"></td>
                        <td id="cashflow-netIncome-3"></td>
                        <td id="cashflow-netIncome-4"></td>
                      </tr>
                      <tr>
                        <th>Depreciation & Amortization</th>
                        <td id="cashflow-depreciationAndAmortization-0"></td>
                        <td id="cashflow-depreciationAndAmortization-1"></td>
                        <td id="cashflow-depreciationAndAmortization-2"></td>
                        <td id="cashflow-depreciationAndAmortization-3"></td>
                        <td id="cashflow-depreciationAndAmortization-4"></td>
                      </tr>
                      <tr>
                        <th>Deferred Income Tax</th>
                        <td id="cashflow-deferredIncomeTax-0"></td>
                        <td id="cashflow-deferredIncomeTax-1"></td>
                        <td id="cashflow-deferredIncomeTax-2"></td>
                        <td id="cashflow-deferredIncomeTax-3"></td>
                        <td id="cashflow-deferredIncomeTax-4"></td>
                      </tr>
                      <tr>
                        <th>Stock Based Compensation</th>
                        <td id="cashflow-stockBasedCompensation-0"></td>
                        <td id="cashflow-stockBasedCompensation-1"></td>
                        <td id="cashflow-stockBasedCompensation-2"></td>
                        <td id="cashflow-stockBasedCompensation-3"></td>
                        <td id="cashflow-stockBasedCompensation-4"></td>
                      </tr>
                      <tr>
                        <th>Change In Working Capital</th>
                        <td id="cashflow-changeInWorkingCapital-0"></td>
                        <td id="cashflow-changeInWorkingCapital-1"></td>
                        <td id="cashflow-changeInWorkingCapital-2"></td>
                        <td id="cashflow-changeInWorkingCapital-3"></td>
                        <td id="cashflow-changeInWorkingCapital-4"></td>
                      </tr>
                      <tr>
                        <th>Account Receivables</th>
                        <td id="cashflow-accountsReceivables-0"></td>
                        <td id="cashflow-accountsReceivables-1"></td>
                        <td id="cashflow-accountsReceivables-2"></td>
                        <td id="cashflow-accountsReceivables-3"></td>
                        <td id="cashflow-accountsReceivables-4"></td>
                      </tr>
                      <tr>
                        <th>Inventory</th>
                        <td id="cashflow-inventory-0"></td>
                        <td id="cashflow-inventory-1"></td>
                        <td id="cashflow-inventory-2"></td>
                        <td id="cashflow-inventory-3"></td>
                        <td id="cashflow-inventory-4"></td>
                      </tr>
                      <tr>
                        <th>Account Payables</th>
                        <td id="cashflow-accountsPayables-0"></td>
                        <td id="cashflow-accountsPayables-1"></td>
                        <td id="cashflow-accountsPayables-2"></td>
                        <td id="cashflow-accountsPayables-3"></td>
                        <td id="cashflow-accountsPayables-4"></td>
                      </tr>
                      <tr>
                        <th>Other Working Capital</th>
                        <td id="cashflow-otherWorkingCapital-0"></td>
                        <td id="cashflow-otherWorkingCapital-1"></td>
                        <td id="cashflow-otherWorkingCapital-2"></td>
                        <td id="cashflow-otherWorkingCapital-3"></td>
                        <td id="cashflow-otherWorkingCapital-4"></td>
                      </tr>
                      <tr>
                        <th>Other Non Cash Items</th>
                        <td id="cashflow-otherNonCashItems-0"></td>
                        <td id="cashflow-otherNonCashItems-1"></td>
                        <td id="cashflow-otherNonCashItems-2"></td>
                        <td id="cashflow-otherNonCashItems-3"></td>
                        <td id="cashflow-otherNonCashItems-4"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Provided By Operating Activities</th>
                        <td id="cashflow-netCashProvidedByOperatingActivities-0"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-1"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-2"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-3"></td>
                        <td id="cashflow-netCashProvidedByOperatingActivities-4"></td>
                      </tr>
                      <tr>
                        <th>Investments In Property Plant & Equipment</th>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-0"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-1"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-2"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-3"></td>
                        <td id="cashflow-investmentsInPropertyPlantAndEquipment-4"></td>
                      </tr>
                      <tr>
                        <th>Acquisitions (Net)</th>
                        <td id="cashflow-acquisitionsNet-0"></td>
                        <td id="cashflow-acquisitionsNet-1"></td>
                        <td id="cashflow-acquisitionsNet-2"></td>
                        <td id="cashflow-acquisitionsNet-3"></td>
                        <td id="cashflow-acquisitionsNet-4"></td>
                      </tr>
                      <tr>
                        <th>Purchases Of Investments</th>
                        <td id="cashflow-purchasesOfInvestments-0"></td>
                        <td id="cashflow-purchasesOfInvestments-1"></td>
                        <td id="cashflow-purchasesOfInvestments-2"></td>
                        <td id="cashflow-purchasesOfInvestments-3"></td>
                        <td id="cashflow-purchasesOfInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Sales Maturities Of Investments</th>
                        <td id="cashflow-salesMaturitiesOfInvestments-0"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-1"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-2"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-3"></td>
                        <td id="cashflow-salesMaturitiesOfInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Other Investing Activities</th>
                        <td id="cashflow-otherInvestingActivites-0"></td>
                        <td id="cashflow-otherInvestingActivites-1"></td>
                        <td id="cashflow-otherInvestingActivites-2"></td>
                        <td id="cashflow-otherInvestingActivites-3"></td>
                        <td id="cashflow-otherInvestingActivites-4"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Used for Investing Activities</th>
                        <td id="cashflow-netCashUsedForInvestingActivites-0"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-1"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-2"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-3"></td>
                        <td id="cashflow-netCashUsedForInvestingActivites-4"></td>
                      </tr>
                      <tr>
                        <th>Debt Repayment</th>
                        <td id="cashflow-debtRepayment-0"></td>
                        <td id="cashflow-debtRepayment-1"></td>
                        <td id="cashflow-debtRepayment-2"></td>
                        <td id="cashflow-debtRepayment-3"></td>
                        <td id="cashflow-debtRepayment-4"></td>
                      </tr>
                      <tr>
                        <th>Common Stock Issued</th>
                        <td id="cashflow-commonStockIssued-0"></td>
                        <td id="cashflow-commonStockIssued-1"></td>
                        <td id="cashflow-commonStockIssued-2"></td>
                        <td id="cashflow-commonStockIssued-3"></td>
                        <td id="cashflow-commonStockIssued-4"></td>
                      </tr>
                      <tr>
                        <th>Common Stock Repurchased</th>
                        <td id="cashflow-commonStockRepurchased-0"></td>
                        <td id="cashflow-commonStockRepurchased-1"></td>
                        <td id="cashflow-commonStockRepurchased-2"></td>
                        <td id="cashflow-commonStockRepurchased-3"></td>
                        <td id="cashflow-commonStockRepurchased-4"></td>
                      </tr>
                      <tr>
                        <th>Dividend Paid</th>
                        <td id="cashflow-dividendsPaid-0"></td>
                        <td id="cashflow-dividendsPaid-1"></td>
                        <td id="cashflow-dividendsPaid-2"></td>
                        <td id="cashflow-dividendsPaid-3"></td>
                        <td id="cashflow-dividendsPaid-4"></td>
                      </tr>
                      <tr>
                        <th>Other Financing Activities</th>
                        <td id="cashflow-otherFinancingActivites-0"></td>
                        <td id="cashflow-otherFinancingActivites-1"></td>
                        <td id="cashflow-otherFinancingActivites-2"></td>
                        <td id="cashflow-otherFinancingActivites-3"></td>
                        <td id="cashflow-otherFinancingActivites-4"></td>
                      </tr>
                      <tr>
                        <th>Net Cash Used Provided By Financing Activities</th>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-0"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-1"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-2"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-3"></td>
                        <td id="cashflow-netCashUsedProvidedByFinancingActivities-4"></td>
                      </tr>
                      <tr>
                        <th>Effect of Forex Changes on Cash</th>
                        <td id="cashflow-effectOfForexChangesOnCash-0"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-1"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-2"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-3"></td>
                        <td id="cashflow-effectOfForexChangesOnCash-4"></td>
                      </tr>
                      <tr>
                        <th>Net Changes in Cash</th>
                        <td id="cashflow-netChangeInCash-0"></td>
                        <td id="cashflow-netChangeInCash-1"></td>
                        <td id="cashflow-netChangeInCash-2"></td>
                        <td id="cashflow-netChangeInCash-3"></td>
                        <td id="cashflow-netChangeInCash-4"></td>
                      </tr>
                      <tr>
                        <th>Cash at End of Period</th>
                        <td id="cashflow-cashAtEndOfPeriod-0"></td>
                        <td id="cashflow-cashAtEndOfPeriod-1"></td>
                        <td id="cashflow-cashAtEndOfPeriod-2"></td>
                        <td id="cashflow-cashAtEndOfPeriod-3"></td>
                        <td id="cashflow-cashAtEndOfPeriod-4"></td>
                      </tr>
                      <tr>
                        <th>Cash at Beginning of Period</th>
                        <td id="cashflow-cashAtBeginningOfPeriod-0"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-1"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-2"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-3"></td>
                        <td id="cashflow-cashAtBeginningOfPeriod-4"></td>
                      </tr>
                      <tr>
                        <th>Operating Cash Flow</th>
                        <td id="cashflow-operatingCashFlow-0"></td>
                        <td id="cashflow-operatingCashFlow-1"></td>
                        <td id="cashflow-operatingCashFlow-2"></td>
                        <td id="cashflow-operatingCashFlow-3"></td>
                        <td id="cashflow-operatingCashFlow-4"></td>
                      </tr>
                      <tr>
                        <th>Capital Expenditure</th>
                        <td id="cashflow-capitalExpenditure-0"></td>
                        <td id="cashflow-capitalExpenditure-1"></td>
                        <td id="cashflow-capitalExpenditure-2"></td>
                        <td id="cashflow-capitalExpenditure-3"></td>
                        <td id="cashflow-capitalExpenditure-4"></td>
                      </tr>
                      <tr>
                        <th>Free Cash Flow</th>
                        <td id="cashflow-freeCashFlow-0"></td>
                        <td id="cashflow-freeCashFlow-1"></td>
                        <td id="cashflow-freeCashFlow-2"></td>
                        <td id="cashflow-freeCashFlow-3"></td>
                        <td id="cashflow-freeCashFlow-4"></td>
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
                    <table class="d-init table table-bordered">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="income-calendarYear-0"></th>
                        <th class="centered" id="income-calendarYear-1"></th>
                        <th class="centered" id="income-calendarYear-2"></th>
                        <th class="centered" id="income-calendarYear-3"></th>
                        <th class="centered" id="income-calendarYear-4"></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th>Revenue</th>
                        <td id="income-revenue-0"></th>
                        <td id="income-revenue-1"></td>
                        <td id="income-revenue-2"></td>
                        <td id="income-revenue-3"></td>
                        <td id="income-revenue-4"></td>
                      </tr>
                      <tr>
                        <th>Cost of Revenue</th>
                        <td id="income-costOfRevenue-0"></th>
                        <td id="income-costOfRevenue-1"></td>
                        <td id="income-costOfRevenue-2"></td>
                        <td id="income-costOfRevenue-3"></td>
                        <td id="income-costOfRevenue-4"></td>
                      </tr>
                      <tr>
                        <th>Gross Profit</th>
                        <td id="income-grossProfit-0"></th>
                        <td id="income-grossProfit-1"></td>
                        <td id="income-grossProfit-2"></td>
                        <td id="income-grossProfit-3"></td>
                        <td id="income-grossProfit-4"></td>
                      </tr>
                      <tr>
                        <th>Gross Profit Ratio</th>
                        <td id="income-grossProfitRatio-0"></th>
                        <td id="income-grossProfitRatio-1"></td>
                        <td id="income-grossProfitRatio-2"></td>
                        <td id="income-grossProfitRatio-3"></td>
                        <td id="income-grossProfitRatio-4"></td>
                      </tr>
                      <tr>
                        <th>Research & Development Expenses</th>
                        <td id="income-researchAndDevelopmentExpenses-0"></th>
                        <td id="income-researchAndDevelopmentExpenses-1"></td>
                        <td id="income-researchAndDevelopmentExpenses-2"></td>
                        <td id="income-researchAndDevelopmentExpenses-3"></td>
                        <td id="income-researchAndDevelopmentExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>General & Administrative Expenses</th>
                        <td id="income-generalAndAdministrativeExpenses-0"></th>
                        <td id="income-generalAndAdministrativeExpenses-1"></td>
                        <td id="income-generalAndAdministrativeExpenses-2"></td>
                        <td id="income-generalAndAdministrativeExpenses-3"></td>
                        <td id="income-generalAndAdministrativeExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Selling & Marketing Expenses</th>
                        <td id="income-sellingAndMarketingExpenses-0"></th>
                        <td id="income-sellingAndMarketingExpenses-1"></td>
                        <td id="income-sellingAndMarketingExpenses-2"></td>
                        <td id="income-sellingAndMarketingExpenses-3"></td>
                        <td id="income-sellingAndMarketingExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Selling, General & Marketing Expenses</th>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-0"></th>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-1"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-2"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-3"></td>
                        <td id="income-sellingGeneralAndAdministrativeExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Other Expenses</th>
                        <td id="income-otherExpenses-0"></th>
                        <td id="income-otherExpenses-1"></td>
                        <td id="income-otherExpenses-2"></td>
                        <td id="income-otherExpenses-3"></td>
                        <td id="income-otherExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Operating Expenses</th>
                        <td id="income-operatingExpenses-0"></th>
                        <td id="income-operatingExpenses-1"></td>
                        <td id="income-operatingExpenses-2"></td>
                        <td id="income-operatingExpenses-3"></td>
                        <td id="income-operatingExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Cost & Expenses</th>
                        <td id="income-costAndExpenses-0"></th>
                        <td id="income-costAndExpenses-1"></td>
                        <td id="income-costAndExpenses-2"></td>
                        <td id="income-costAndExpenses-3"></td>
                        <td id="income-costAndExpenses-4"></td>
                      </tr>
                      <tr>
                        <th>Interest Income</th>
                        <td id="income-interestIncome-0"></th>
                        <td id="income-interestIncome-1"></td>
                        <td id="income-interestIncome-2"></td>
                        <td id="income-interestIncome-3"></td>
                        <td id="income-interestIncome-4"></td>
                      </tr>
                      <tr>
                        <th>Interest Expenses</th>
                        <td id="income-interestExpense-0"></th>
                        <td id="income-interestExpense-1"></td>
                        <td id="income-interestExpense-2"></td>
                        <td id="income-interestExpense-3"></td>
                        <td id="income-interestExpense-4"></td>
                      </tr>
                      <tr>
                        <th>Depreciation & Amortization</th>
                        <td id="income-depreciationAndAmortization-0"></th>
                        <td id="income-depreciationAndAmortization-1"></td>
                        <td id="income-depreciationAndAmortization-2"></td>
                        <td id="income-depreciationAndAmortization-3"></td>
                        <td id="income-depreciationAndAmortization-4"></td>
                      </tr>
                      <tr>
                        <th>EBITDA</th>
                        <td id="income-ebitda-0"></th>
                        <td id="income-ebitda-1"></td>
                        <td id="income-ebitda-2"></td>
                        <td id="income-ebitda-3"></td>
                        <td id="income-ebitda-4"></td>
                      </tr>
                      <tr>
                        <th>EBITDA Ratio</th>
                        <td id="income-ebitdaratio-0"></th>
                        <td id="income-ebitdaratio-1"></td>
                        <td id="income-ebitdaratio-2"></td>
                        <td id="income-ebitdaratio-3"></td>
                        <td id="income-ebitdaratio-4"></td>
                      </tr>
                      <tr>
                        <th>Operating Income</th>
                        <td id="income-operatingIncome-0"></th>
                        <td id="income-operatingIncome-1"></td>
                        <td id="income-operatingIncome-2"></td>
                        <td id="income-operatingIncome-3"></td>
                        <td id="income-operatingIncome-4"></td>
                      </tr>
                      <tr>
                        <th>Operating Income Ratio</th>
                        <td id="income-operatingIncomeRatio-0"></th>
                        <td id="income-operatingIncomeRatio-1"></td>
                        <td id="income-operatingIncomeRatio-2"></td>
                        <td id="income-operatingIncomeRatio-3"></td>
                        <td id="income-operatingIncomeRatio-4"></td>
                      </tr>
                      <tr>
                        <th>Total Other Income Expenses (Net)</th>
                        <td id="income-totalOtherIncomeExpensesNet-0"></th>
                        <td id="income-totalOtherIncomeExpensesNet-1"></td>
                        <td id="income-totalOtherIncomeExpensesNet-2"></td>
                        <td id="income-totalOtherIncomeExpensesNet-3"></td>
                        <td id="income-totalOtherIncomeExpensesNet-4"></td>
                      </tr>
                      <tr>
                        <th>Income Before Tax</th>
                        <td id="income-incomeBeforeTax-0"></th>
                        <td id="income-incomeBeforeTax-1"></td>
                        <td id="income-incomeBeforeTax-2"></td>
                        <td id="income-incomeBeforeTax-3"></td>
                        <td id="income-incomeBeforeTax-4"></td>
                      </tr>
                      <tr>
                        <th>Income Before Tax Ratio</th>
                        <td id="income-incomeBeforeTaxRatio-0"></th>
                        <td id="income-incomeBeforeTaxRatio-1"></td>
                        <td id="income-incomeBeforeTaxRatio-2"></td>
                        <td id="income-incomeBeforeTaxRatio-3"></td>
                        <td id="income-incomeBeforeTaxRatio-4"></td>
                      </tr>
                      <tr>
                        <th>Income Tax Expenses</th>
                        <td id="income-incomeTaxExpense-0"></th>
                        <td id="income-incomeTaxExpense-1"></td>
                        <td id="income-incomeTaxExpense-2"></td>
                        <td id="income-incomeTaxExpense-3"></td>
                        <td id="income-incomeTaxExpense-4"></td>
                      </tr>
                      <tr>
                        <th>Net Income</th>
                        <td id="income-netIncome-0"></th>
                        <td id="income-netIncome-1"></td>
                        <td id="income-netIncome-2"></td>
                        <td id="income-netIncome-3"></td>
                        <td id="income-netIncome-4"></td>
                      </tr>
                      <tr>
                        <th>Net Income Ratio</th>
                        <td id="income-netIncomeRatio-0"></th>
                        <td id="income-netIncomeRatio-1"></td>
                        <td id="income-netIncomeRatio-2"></td>
                        <td id="income-netIncomeRatio-3"></td>
                        <td id="income-netIncomeRatio-4"></td>
                      </tr>
                      <tr>
                        <th>EPS</th>
                        <td id="income-eps-0"></th>
                        <td id="income-eps-1"></td>
                        <td id="income-eps-2"></td>
                        <td id="income-eps-3"></td>
                        <td id="income-eps-4"></td>
                      </tr>
                      <tr>
                        <th>EPS Diluted</th>
                        <td id="income-epsdiluted-0"></th>
                        <td id="income-epsdiluted-1"></td>
                        <td id="income-epsdiluted-2"></td>
                        <td id="income-epsdiluted-3"></td>
                        <td id="income-epsdiluted-4"></td>
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
                    <table class="d-init table table-bordered">
                      <thead>
                      <tr>
                        <th></th>
                        <th class="centered" id="balance-calendarYear-0"></th>
                        <th class="centered" id="balance-calendarYear-1"></th>
                        <th class="centered" id="balance-calendarYear-2"></th>
                        <th class="centered" id="balance-calendarYear-3"></th>
                        <th class="centered" id="balance-calendarYear-4"></th>
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
                      </tr>
                      <tr>
                        <th>Short Term Investments</th>
                        <td id="balance-shortTermInvestments-0"></td>
                        <td id="balance-shortTermInvestments-1"></td>
                        <td id="balance-shortTermInvestments-2"></td>
                        <td id="balance-shortTermInvestments-3"></td>
                        <td id="balance-shortTermInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Cash & Short Term Investments</th>
                        <td id="balance-cashAndShortTermInvestments-0"></td>
                        <td id="balance-cashAndShortTermInvestments-1"></td>
                        <td id="balance-cashAndShortTermInvestments-2"></td>
                        <td id="balance-cashAndCashEquivalents-3"></td>
                        <td id="balance-cashAndShortTermInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Net Receivables</th>
                        <td id="balance-netReceivables-0"></td>
                        <td id="balance-netReceivables-1"></td>
                        <td id="balance-netReceivables-2"></td>
                        <td id="balance-netReceivables-3"></td>
                        <td id="balance-netReceivables-4"></td>
                      </tr>
                      <tr>
                        <th>Inventory</th>
                        <td id="balance-inventory-0"></td>
                        <td id="balance-inventory-1"></td>
                        <td id="balance-inventory-2"></td>
                        <td id="balance-inventory-3"></td>
                        <td id="balance-inventory-4"></td>
                      </tr>
                      <tr>
                        <th>Other Current Assets</th>
                        <td id="balance-otherCurrentAssets-0"></td>
                        <td id="balance-otherCurrentAssets-1"></td>
                        <td id="balance-otherCurrentAssets-2"></td>
                        <td id="balance-otherCurrentAssets-3"></td>
                        <td id="balance-otherCurrentAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Total Current Assets</th>
                        <td id="balance-totalCurrentAssets-0"></td>
                        <td id="balance-totalCurrentAssets-1"></td>
                        <td id="balance-totalCurrentAssets-2"></td>
                        <td id="balance-totalCurrentAssets-3"></td>
                        <td id="balance-totalCurrentAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Net Property Plant Equipment</th>
                        <td id="balance-propertyPlantEquipmentNet-0"></td>
                        <td id="balance-propertyPlantEquipmentNet-1"></td>
                        <td id="balance-propertyPlantEquipmentNet-2"></td>
                        <td id="balance-propertyPlantEquipmentNet-3"></td>
                        <td id="balance-propertyPlantEquipmentNet-4"></td>
                      </tr>
                      <tr>
                        <th>Good Will</th>
                        <td id="balance-goodwill-0"></td>
                        <td id="balance-goodwill-1"></td>
                        <td id="balance-goodwill-2"></td>
                        <td id="balance-goodwill-3"></td>
                        <td id="balance-goodwill-4"></td>
                      </tr>
                      <tr>
                        <th>Intangible Assets</th>
                        <td id="balance-intangibleAssets-0"></td>
                        <td id="balance-intangibleAssets-1"></td>
                        <td id="balance-intangibleAssets-2"></td>
                        <td id="balance-intangibleAssets-3"></td>
                        <td id="balance-intangibleAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Good Will & Intangible Assets</th>
                        <td id="balance-goodwillAndIntangibleAssets-0"></td>
                        <td id="balance-goodwillAndIntangibleAssets-1"></td>
                        <td id="balance-goodwillAndIntangibleAssets-2"></td>
                        <td id="balance-goodwillAndIntangibleAssets-3"></td>
                        <td id="balance-goodwillAndIntangibleAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Long Term Investments</th>
                        <td id="balance-longTermInvestments-0"></td>
                        <td id="balance-longTermInvestments-1"></td>
                        <td id="balance-longTermInvestments-2"></td>
                        <td id="balance-longTermInvestments-3"></td>
                        <td id="balance-longTermInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Tax Assets</th>
                        <td id="balance-taxAssets-0"></td>
                        <td id="balance-taxAssets-1"></td>
                        <td id="balance-taxAssets-2"></td>
                        <td id="balance-taxAssets-3"></td>
                        <td id="balance-taxAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Other Non Current Assets</th>
                        <td id="balance-otherNonCurrentAssets-0"></td>
                        <td id="balance-otherNonCurrentAssets-1"></td>
                        <td id="balance-otherNonCurrentAssets-2"></td>
                        <td id="balance-otherNonCurrentAssets-3"></td>
                        <td id="balance-otherNonCurrentAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Total Non Current Assets</th>
                        <td id="balance-totalNonCurrentAssets-0"></td>
                        <td id="balance-totalNonCurrentAssets-1"></td>
                        <td id="balance-totalNonCurrentAssets-2"></td>
                        <td id="balance-totalNonCurrentAssets-3"></td>
                        <td id="balance-totalNonCurrentAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Other Assets</th>
                        <td id="balance-otherAssets-0"></td>
                        <td id="balance-otherAssets-1"></td>
                        <td id="balance-otherAssets-2"></td>
                        <td id="balance-otherAssets-3"></td>
                        <td id="balance-otherAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Total Assets</th>
                        <td id="balance-totalAssets-0"></td>
                        <td id="balance-totalAssets-1"></td>
                        <td id="balance-totalAssets-2"></td>
                        <td id="balance-totalAssets-3"></td>
                        <td id="balance-totalAssets-4"></td>
                      </tr>
                      <tr>
                        <th>Account Payables</th>
                        <td id="balance-accountPayables-0"></td>
                        <td id="balance-accountPayables-1"></td>
                        <td id="balance-accountPayables-2"></td>
                        <td id="balance-accountPayables-3"></td>
                        <td id="balance-accountPayables-4"></td>
                      </tr>
                      <tr>
                        <th>Short Term Debt</th>
                        <td id="balance-shortTermDebt-0"></td>
                        <td id="balance-shortTermDebt-1"></td>
                        <td id="balance-shortTermDebt-2"></td>
                        <td id="balance-shortTermDebt-3"></td>
                        <td id="balance-shortTermDebt-4"></td>
                      </tr>
                      <tr>
                        <th>Tax Payables</th>
                        <td id="balance-taxPayables-0"></td>
                        <td id="balance-taxPayables-1"></td>
                        <td id="balance-taxPayables-2"></td>
                        <td id="balance-taxPayables-3"></td>
                        <td id="balance-taxPayables-4"></td>
                      </tr>
                      <tr>
                        <th>Deferred Revenue</th>
                        <td id="balance-deferredRevenue-0"></td>
                        <td id="balance-deferredRevenue-1"></td>
                        <td id="balance-deferredRevenue-2"></td>
                        <td id="balance-deferredRevenue-3"></td>
                        <td id="balance-deferredRevenue-4"></td>
                      </tr>
                      <tr>
                        <th>Other Current Liabilities</th>
                        <td id="balance-otherCurrentLiabilities-0"></td>
                        <td id="balance-otherCurrentLiabilities-1"></td>
                        <td id="balance-otherCurrentLiabilities-2"></td>
                        <td id="balance-otherCurrentLiabilities-3"></td>
                        <td id="balance-otherCurrentLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Total Current Liabilities</th>
                        <td id="balance-totalCurrentLiabilities-0"></td>
                        <td id="balance-totalCurrentLiabilities-1"></td>
                        <td id="balance-totalCurrentLiabilities-2"></td>
                        <td id="balance-totalCurrentLiabilities-3"></td>
                        <td id="balance-totalCurrentLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Long Term Debt</th>
                        <td id="balance-longTermDebt-0"></td>
                        <td id="balance-longTermDebt-1"></td>
                        <td id="balance-longTermDebt-2"></td>
                        <td id="balance-longTermDebt-3"></td>
                        <td id="balance-longTermDebt-4"></td>
                      </tr>
                      <tr>
                        <th>Deferred Revenue (Non Current)</th>
                        <td id="balance-deferredRevenueNonCurrent-0"></td>
                        <td id="balance-deferredRevenueNonCurrent-1"></td>
                        <td id="balance-deferredRevenueNonCurrent-2"></td>
                        <td id="balance-deferredRevenueNonCurrent-3"></td>
                        <td id="balance-deferredRevenueNonCurrent-4"></td>
                      </tr>
                      <tr>
                        <th>Deferred Tax Liabilities (Non Current)</th>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-0"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-1"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-2"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-3"></td>
                        <td id="balance-deferredTaxLiabilitiesNonCurrent-4"></td>
                      </tr>
                      <tr>
                        <th>Other Non Current Liabilities</th>
                        <td id="balance-otherNonCurrentLiabilities-0"></td>
                        <td id="balance-otherNonCurrentLiabilities-1"></td>
                        <td id="balance-otherNonCurrentLiabilities-2"></td>
                        <td id="balance-otherNonCurrentLiabilities-3"></td>
                        <td id="balance-otherNonCurrentLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Total Non Current Liabilities</th>
                        <td id="balance-totalNonCurrentLiabilities-0"></td>
                        <td id="balance-totalNonCurrentLiabilities-1"></td>
                        <td id="balance-totalNonCurrentLiabilities-2"></td>
                        <td id="balance-totalNonCurrentLiabilities-3"></td>
                        <td id="balance-totalNonCurrentLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Other Liabilities</th>
                        <td id="balance-otherLiabilities-0"></td>
                        <td id="balance-otherLiabilities-1"></td>
                        <td id="balance-otherLiabilities-2"></td>
                        <td id="balance-otherLiabilities-3"></td>
                        <td id="balance-otherLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Capital Lease Obligations</th>
                        <td id="balance-capitalLeaseObligations-0"></td>
                        <td id="balance-capitalLeaseObligations-1"></td>
                        <td id="balance-capitalLeaseObligations-2"></td>
                        <td id="balance-capitalLeaseObligations-3"></td>
                        <td id="balance-capitalLeaseObligations-4"></td>
                      </tr>
                      <tr>
                        <th>Total Liabilities</th>
                        <td id="balance-totalLiabilities-0"></td>
                        <td id="balance-totalLiabilities-1"></td>
                        <td id="balance-totalLiabilities-2"></td>
                        <td id="balance-totalLiabilities-3"></td>
                        <td id="balance-totalLiabilities-4"></td>
                      </tr>
                      <tr>
                        <th>Preferred Stock</th>
                        <td id="balance-preferredStock-0"></td>
                        <td id="balance-preferredStock-1"></td>
                        <td id="balance-preferredStock-2"></td>
                        <td id="balance-preferredStock-3"></td>
                        <td id="balance-preferredStock-4"></td>
                      </tr>
                      <tr>
                        <th>Common Stock</th>
                        <td id="balance-commonStock-0"></td>
                        <td id="balance-commonStock-1"></td>
                        <td id="balance-commonStock-2"></td>
                        <td id="balance-commonStock-3"></td>
                        <td id="balance-commonStock-4"></td>
                      </tr>
                      <tr>
                        <th>Retained Earnings</th>
                        <td id="balance-retainedEarnings-0"></td>
                        <td id="balance-retainedEarnings-1"></td>
                        <td id="balance-retainedEarnings-2"></td>
                        <td id="balance-retainedEarnings-3"></td>
                        <td id="balance-retainedEarnings-4"></td>
                      </tr>
                      <tr>
                        <th>Accumulated Other Comprehensive Income Loss</th>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-0"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-1"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-2"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-3"></td>
                        <td id="balance-accumulatedOtherComprehensiveIncomeLoss-4"></td>
                      </tr>
                      <tr>
                        <th>Other Total Stockholders Equity</th>
                        <td id="balance-othertotalStockholdersEquity-0"></td>
                        <td id="balance-othertotalStockholdersEquity-1"></td>
                        <td id="balance-othertotalStockholdersEquity-2"></td>
                        <td id="balance-othertotalStockholdersEquity-3"></td>
                        <td id="balance-othertotalStockholdersEquity-4"></td>
                      </tr>
                      <tr>
                        <th>Total Stockholders Equity</th>
                        <td id="balance-totalStockholdersEquity-0"></td>
                        <td id="balance-totalStockholdersEquity-1"></td>
                        <td id="balance-totalStockholdersEquity-2"></td>
                        <td id="balance-totalStockholdersEquity-3"></td>
                        <td id="balance-totalStockholdersEquity-4"></td>
                      </tr>
                      <tr>
                        <th>Total Liabilities & Stockholders Equity</th>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-0"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-1"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-2"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-3"></td>
                        <td id="balance-totalLiabilitiesAndStockholdersEquity-4"></td>
                      </tr>
                      <tr>
                        <th>Minority Interest</th>
                        <td id="balance-minorityInterest-0"></td>
                        <td id="balance-minorityInterest-1"></td>
                        <td id="balance-minorityInterest-2"></td>
                        <td id="balance-minorityInterest-3"></td>
                        <td id="balance-minorityInterest-4"></td>
                      </tr>
                      <tr>
                        <th>Total Equity</th>
                        <td id="balance-totalEquity-0"></td>
                        <td id="balance-totalEquity-1"></td>
                        <td id="balance-totalEquity-2"></td>
                        <td id="balance-totalEquity-3"></td>
                        <td id="balance-totalEquity-4"></td>
                      </tr>
                      <tr>
                        <th>Total Liabilities & Equity</th>
                        <td id="balance-totalLiabilitiesAndTotalEquity-0"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-1"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-2"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-3"></td>
                        <td id="balance-totalLiabilitiesAndTotalEquity-4"></td>
                      </tr>
                      <tr>
                        <th>Total Investments</th>
                        <td id="balance-totalInvestments-0"></td>
                        <td id="balance-totalInvestments-1"></td>
                        <td id="balance-totalInvestments-2"></td>
                        <td id="balance-totalInvestments-3"></td>
                        <td id="balance-totalInvestments-4"></td>
                      </tr>
                      <tr>
                        <th>Total Debt</th>
                        <td id="balance-totalDebt-0"></td>
                        <td id="balance-totalDebt-1"></td>
                        <td id="balance-totalDebt-2"></td>
                        <td id="balance-totalDebt-3"></td>
                        <td id="balance-totalDebt-4"></td>
                      </tr>
                      <tr>
                        <th>Net Debt</th>
                        <td id="balance-netDebt-0"></td>
                        <td id="balance-netDebt-1"></td>
                        <td id="balance-netDebt-2"></td>
                        <td id="balance-netDebt-3"></td>
                        <td id="balance-netDebt-4"></td>
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

</style>

@section('script')
<script>
    internationalNumberFormat = new Intl.NumberFormat('en-US');
    var stock = "AAPL";
    var baseURL = '{{env('API_BASEURL')}}';
    var cfURL = "/api/v3/cash-flow-statement/{symbol}?limit=5";
    var isURL ="/api/v3/income-statement/{symbol}?limit=5";
    var bsURL = "/api/v3/balance-sheet-statement/{symbol}?limit=5";

    var tokenUrl = "&apikey="
    var token = '{{env('API_TOKEN')}}';

    var fcfURL = "";
    var fisURL = "";
    var fbsURL = "";

    const dataBox = Array.from(document.getElementsByClassName('data'));
    const NoDataBox = Array.from(document.getElementsByClassName('no-data'));

    urlMaking();

    function stockSearch(){
      if(document.getElementById('search').value !== ""){
      stock = document.getElementById('search').value;
      document.getElementById('company-ticker').innerHTML = stock;

      dataBox.forEach(box => {
        box.style.display = 'none';
      });

      NoDataBox.forEach(box => {
        box.style.display = 'block';
      });

      urlMaking();
      
      }else{
        alert("Please Insert Stock Ticker");
      }
    }

    function urlMaking(){
      fcfURL = baseURL + cfURL + tokenUrl + token;
      fisURL = baseURL + isURL + tokenUrl + token;
      fbsURL = baseURL + bsURL + tokenUrl + token;

      fcfURL = fcfURL.replace("{symbol}",stock);
      fisURL = fisURL.replace("{symbol}",stock);
      fbsURL = fbsURL.replace("{symbol}",stock);
      
      console.log(stock);

      getRequest(fisURL,drawOutputIncome);
      getRequest(fbsURL,drawOutputBalance);
      getRequest(fcfURL,drawOutputCashflow);
      
      dataBox.forEach(box => {
        box.style.display = 'block';
      });

      NoDataBox.forEach(box => {
        box.style.display = 'none';
      });
    }

    function drawOutputIncome(responseText) {
     let resp = JSON.parse(responseText);
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
   }

   function drawOutputBalance(responseText) {
     let resp = JSON.parse(responseText);
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
   }

   function drawOutputCashflow(responseText) {
     let resp = JSON.parse(responseText);
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
   }

   function getRequest(url, success) {
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
   }

</script>
@endsection