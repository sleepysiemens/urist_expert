$('#surname-checkbox-1').on('click', function()
{
    $('#surname-div').removeClass('hide');
});

$('#surname-checkbox-2').on('click', function()
{
    $('#surname-div').addClass('hide');
});

$('#address-checkbox').on('click', function()
{
    $( "#address-div" ).slideToggle( "fast", function() {});
});

$('#children-checkbox').on('click', function()
{
    $( "#children-div" ).slideToggle( "fast", function() {});
});

$('#children-input').on('change', function()
{
    $( "#birth-certificate-div" ).slideToggle( "fast", function() {});
});


$('#marriage-checkbox').on('click', function()
{
    $( "#marriage-div-1" ).slideToggle( "fast", function() {});
    $( "#marriage-div-2" ).slideToggle( "fast", function() {});
});

$('#work-checkbox').on('click', function()
{
    $( "#work-div-1" ).slideToggle( "fast", function() {});
    $( "#work-div-2" ).slideToggle( "fast", function() {});
});

$('#pensioner-checkbox').on('click', function()
{
    $( "#pensioner-div" ).slideToggle( "fast", function() {});
});

function bank_accounts_amount_func()
{
    let bank_accounts_amount=$( "#bank_accounts_amount" ).val();
    for(let i=1;i<=bank_accounts_amount;i++)
    {
        $('.bank_account_div_'+i).removeClass('hide');
    }
    for(let i=10;i>bank_accounts_amount;i--)
    {
        $('.bank_account_div_'+i).addClass('hide');
    }
};

function creditors_amount_func()
{
    let creditors_amount=$( "#creditors_amount" ).val();
    for(let i=1;i<=creditors_amount;i++)
    {
        $('.creditor_div_'+i).removeClass('hide');
    }
    for(let i=10;i>creditors_amount;i--)
    {
        $('.creditor_div_'+i).addClass('hide');
    }
};

function obligatory_payments_amount_func()
{
    let obligatory_payments_amount=$( "#obligatory_payments_amount" ).val();
    for(let i=1;i<=obligatory_payments_amount;i++)
    {
        $('.obligatory_payments_div_'+i).removeClass('hide');
    }
    for(let i=10;i>obligatory_payments_amount;i--)
    {
        $('.obligatory_payments_div_'+i).addClass('hide');
    }
};

