<?php 

function getRandomDate()
{
    $timestamp = rand( strtotime("Jan 01 2020"), strtotime("Mar 01 2021") );
    return date("d.m.Y", $timestamp );
}