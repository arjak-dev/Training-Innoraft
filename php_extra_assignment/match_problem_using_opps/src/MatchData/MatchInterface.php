<?php
  namespace MatchData;

  /**
   * Defines the function of the match class.
   * 
   */
  interface MatchInterface{

     /**
     * Get the highest Scorer of the Tournamnet.
     * 
     * @param $match Match
     * An array contains the details of each match 
     * 
     * Prints : Highest Scorer Player Name with the run  
     */
    public function gethighestscore($match);

    /**
     * Get the total team score. 
     * 
     * @param $team Team
     * -Contains team playing in each match that is 2 teams 
     * 
     * @return Associative-Array
     * -An Associative array of team name and total score 
     * 
     */
    public function gettotalteamScore($team);

    /**
     * Get the Team which own the tournament.
     * 
     * @param $match match
     * -An array contains the details of each match
     * 
     * Prints: 
     * -The Winner team and the Run scored by them  
     */
    public function getournamentwinner($match);

     /**
     * Get the Maximum Scoring match (Score of team-1 + Score of team-2)
     * 
     * @param $match
     * An array contains the details of each match
     * 
     * Print:
     * The name of the maximum scring match with the total run scored in that match 
     */
    public function getmaximumscore($match);

  }