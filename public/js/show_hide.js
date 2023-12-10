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

$('#show-password').click(function()
{
        $('#gos_uslugi_password').attr('type','text');
        password_show=1;
});

$('#passport_button').click(function()
{
    $('#passport_info').removeClass('hide');
    $('#inn_info').addClass('hide');
    $('#snils_info').addClass('hide');
    $('#employment_history_info').addClass('hide');
    $('#marriage_certificate_info').addClass('hide');

    $('#passport_button').addClass('active');
    $('#inn_button').removeClass('active');
    $('#snils_button').removeClass('active');
    $('#employment_history_button').removeClass('active');
    $('#marriage_certificate_button').removeClass('active');
});

$('#inn_button').click(function()
{
    $('#passport_info').addClass('hide');
    $('#inn_info').removeClass('hide');
    $('#snils_info').addClass('hide');
    $('#employment_history_info').addClass('hide');
    $('#marriage_certificate_info').addClass('hide');

    $('#passport_button').removeClass('active');
    $('#inn_button').addClass('active');
    $('#snils_button').removeClass('active');
    $('#employment_history_button').removeClass('active');
    $('#marriage_certificate_button').removeClass('active');
});

$('#snils_button').click(function()
{
    $('#passport_info').addClass('hide');
    $('#inn_info').addClass('hide');
    $('#snils_info').removeClass('hide');
    $('#employment_history_info').addClass('hide');
    $('#marriage_certificate_info').addClass('hide');

    $('#passport_button').removeClass('active');
    $('#inn_button').removeClass('active');
    $('#snils_button').addClass('active');
    $('#employment_history_button').removeClass('active');
    $('#marriage_certificate_button').removeClass('active');
});

$('#employment_history_button').click(function()
{
    $('#passport_info').addClass('hide');
    $('#inn_info').addClass('hide');
    $('#snils_info').addClass('hide');
    $('#employment_history_info').removeClass('hide');
    $('#marriage_certificate_info').addClass('hide');

    $('#passport_button').removeClass('active');
    $('#inn_button').removeClass('active');
    $('#snils_button').removeClass('active');
    $('#employment_history_button').addClass('active');
    $('#marriage_certificate_button').removeClass('active');
});

$('#marriage_certificate_button').click(function()
{
    $('#passport_info').addClass('hide');
    $('#inn_info').addClass('hide');
    $('#snils_info').addClass('hide');
    $('#employment_history_info').addClass('hide');
    $('#marriage_certificate_info').removeClass('hide');

    $('#passport_button').removeClass('active');
    $('#inn_button').removeClass('active');
    $('#snils_button').removeClass('active');
    $('#employment_history_button').removeClass('active');
    $('#marriage_certificate_button').addClass('active');
});

$('#have_land_plot').on('click', function()
{
    $( "#land-plot-div" ).slideToggle( "fast", function() {});
});
function land_plots_amount_func()
{
    let land_plot_amount=$( "#land_plots_amount" ).val();
    for(let i=1;i<=land_plot_amount;i++)
    {
        $('.land_plots_div_'+i).removeClass('hide');
    }
    for(let i=10;i>land_plot_amount;i--)
    {
        $('.land_plots_div_'+i).addClass('hide');
    }
};

$('#have_residential_houses').on('click', function()
{
    $( "#residential_houses-div" ).slideToggle( "fast", function() {});
});
function residential_houses_amount_func()
{
    let residential_houses_amount=$( "#land_plots_amount" ).val();
    for(let i=1;i<=residential_houses_amount;i++)
    {
        $('.residential_houses_div_'+i).removeClass('hide');
    }
    for(let i=10;i>residential_houses_amount;i--)
    {
        $('.residential_houses_div_'+i).addClass('hide');
    }
};

$('#have_flats').on('click', function()
{
    $( "#flats-div" ).slideToggle( "fast", function() {});
});
function flats_amount_func()
{
    let flats_amount=$( "#flats_amount" ).val();
    for(let i=1;i<=flats_amount;i++)
    {
        $('.flats_div_'+i).removeClass('hide');
    }
    for(let i=10;i>flats_amount;i--)
    {
        $('.flats_div_'+i).addClass('hide');
    }
};

$('#have_garages').on('click', function()
{
    $( "#garages-div" ).slideToggle( "fast", function() {});
});
function garages_amount_func()
{
    let garages_amount=$( "#garages_amount" ).val();
    for(let i=1;i<=garages_amount;i++)
    {
        $('.garages_div_'+i).removeClass('hide');
    }
    for(let i=10;i>garages_amount;i--)
    {
        $('.garages_div_'+i).addClass('hide');
    }
};

$('#have_another_estate').on('click', function()
{
    $( "#another_estate-div" ).slideToggle( "fast", function() {});
});
function another_estate_amount_func()
{
    let another_estate_amount=$( "#another_estate_amount" ).val();
    for(let i=1;i<=another_estate_amount;i++)
    {
        $('.another_estate_div_'+i).removeClass('hide');
    }
    for(let i=10;i>another_estate_amount;i--)
    {
        $('.another_estate_div_'+i).addClass('hide');
    }
};

$('#have_cars').on('click', function()
{
    $( "#cars-div" ).slideToggle( "fast", function() {});
});
function cars_amount_func()
{
    let cars_amount=$( "#cars_amount" ).val();
    for(let i=1;i<=cars_amount;i++)
    {
        $('.cars_div_'+i).removeClass('hide');
    }
    for(let i=10;i>cars_amount;i--)
    {
        $('.cars_div_'+i).addClass('hide');
    }
};

$('#have_cargo_vehicles').on('click', function()
{
    $( "#cargo_vehicles-div" ).slideToggle( "fast", function() {});
});
function cargo_vehicles_amount_func()
{
    let cargo_vehicles_amount=$( "#cargo_vehicles_amount" ).val();
    for(let i=1;i<=cargo_vehicles_amount;i++)
    {
        $('.cargo_vehicles_div_'+i).removeClass('hide');
    }
    for(let i=10;i>cargo_vehicles_amount;i--)
    {
        $('.cargo_vehicles_div_'+i).addClass('hide');
    }
};

$('#have_motorized_transport').on('click', function()
{
    $( "#motorized_transport-div" ).slideToggle( "fast", function() {});
});
function motorized_transport_amount_func()
{
    let motorized_transport_amount=$( "#motorized_transport_amount" ).val();
    for(let i=1;i<=motorized_transport_amount;i++)
    {
        $('.motorized_transport_div_'+i).removeClass('hide');
    }
    for(let i=10;i>motorized_transport_amount;i--)
    {
        $('.motorized_transport_div_'+i).addClass('hide');
    }
};
$('#have_agricultural_technique').on('click', function()
{
    $( "#agricultural_technique-div" ).slideToggle( "fast", function() {});
});
function agricultural_technique_amount_func()
{
    let agricultural_technique_amount=$( "#agricultural_technique_amount" ).val();
    for(let i=1;i<=agricultural_technique_amount;i++)
    {
        $('.agricultural_technique_div_'+i).removeClass('hide');
    }
    for(let i=10;i>agricultural_technique_amount;i--)
    {
        $('.agricultural_technique_div_'+i).addClass('hide');
    }
};

$('#have_water_transport').on('click', function()
{
    $( "#water_transport-div" ).slideToggle( "fast", function() {});
});
function water_transport_amount_func()
{
    let water_transport_amount=$( "#water_transport_amount" ).val();
    for(let i=1;i<=water_transport_amount;i++)
    {
        $('.water_transport_div_'+i).removeClass('hide');
    }
    for(let i=10;i>water_transport_amount;i--)
    {
        $('.water_transport_div_'+i).addClass('hide');
    }
};


$('#have_air_transport').on('click', function()
{
    $( "#air_transport-div" ).slideToggle( "fast", function() {});
});
function air_transport_amount_func()
{
    let air_transport_amount=$( "#air_transport_amount" ).val();
    for(let i=1;i<=air_transport_amount;i++)
    {
        $('.air_transport_div_'+i).removeClass('hide');
    }
    for(let i=10;i>air_transport_amount;i--)
    {
        $('.air_transport_div_'+i).addClass('hide');
    }
};

$('#have_other_transport').on('click', function()
{
    $( "#other_transport-div" ).slideToggle( "fast", function() {});
});
function other_transport_amount_func()
{
    let other_transport_amount=$( "#other_transport_amount" ).val();
    for(let i=1;i<=other_transport_amount;i++)
    {
        $('.other_transport_div_'+i).removeClass('hide');
    }
    for(let i=10;i>other_transport_amount;i--)
    {
        $('.other_transport_div_'+i).addClass('hide');
    }
};
