<?php

function getContactNo1()
{
    return explode(',', config('app.company_contact_no'))[0];
}

function getContactNo2()
{
    return explode(',', config('app.company_contact_no'))[1];
}
