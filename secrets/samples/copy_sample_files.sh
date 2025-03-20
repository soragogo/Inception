#!/bin/bash

# Get the list of .sample files
sample_files=$(ls *.sample)

# Loop through each .sample file
for file in $sample_files; do
  # Remove the .sample extension to get the new file name
  new_file="${file%.sample}"

  # Copy the .sample file to the new file in the parent directory
  cp "$file" "../$new_file"
done
