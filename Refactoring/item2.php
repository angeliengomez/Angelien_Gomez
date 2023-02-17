
public function getAcceleration($primaryForce, $secondaryForce)
{
return $acceleration = $primaryForce * $secondaryForce;
}
public function getVelocity ($acceleration, $secondaryForce)
{
return $velocity = $acceleration * $secondaryForce;
}

