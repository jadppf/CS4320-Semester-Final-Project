
# Create Generic Docker Instance Based on Existing Configuration File

## Description
Following the upload of the dataset, SNC files, and the OCDX manifest, a new Jupyter Hub instance is created to house the project. The instance is based on a generic profile provided by the OCDX Engine

## Functional Requirements
Button to push to launch JupyterHub Instance

## Technical Requirements
Jupyter Hub Installation
Docker Installation 
Working, public web server

## Primary Actors
Reserachers
Students 
Data Scientists 

## Pre Conditions
Dataset, SNC Files, and OCDX manifest have been successfully uploaded and the technical environment is running

## Main Success Scenario
Generic Jupyter Hub instance is created and displaying dataset, SNC files, and OCDX manifest 

## Failed End Condition
Generic Jupyter Hub instance fails to be created and/or dataset, SNC files, and OCDX manifest are not displayed

## Trigger
User pushes 'Create Generic Jupyter Hub Instance' button 

## Dependent Use Cases
Upload Dataset
Generate OCDX Manifest