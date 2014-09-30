<?php

/**
 * (PHP 5 >= 5.5.0)<br/>
 * <p>Used to create new password hashes using the <code>CRYPT_BLOWFISH</code> algorithm.</p>
 * <p>This will always result in a hash using "$2y$" crypt format, which is always 60 characters wide.</p>
 * <p>Supported Options:</p>
 * <ul>
 * <li><i>salt</i> - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.<br/>
 * If omitted, a random salt will be generated by {@see password_hash()} for each password hashed. This is the intended mode of operation.</li>
 * <li><i>cost</i> - which denotes the algorithmic cost that should be used. Examples of these values can be found on the {@see crypt()} page.<br/>
 * If ommitted, a default value of <i>10</i> will be used. This is a good baseline cost, but you may want to consider increasing it depending on your hardware.</li>
 * </ul>
 * @link http://php.net/manual/en/password.constants.php
 */
define ('PASSWORD_BCRYPT', 1);

/**
 * (PHP 5 >= 5.5.0)<br/>
 * <p>The default algorithm to use for hashing if no algorithm is provided. This may change in newer PHP releases when newer, stronger hashing algorithms are supported.</p>
 * <p>It is worth noting that over time this constant can (and likely will) change. Therefore you should be aware that the length of the resulting hash can change. Therefore, if you use <code>PASSWORD_DEFAULT</code> you should store the resulting hash in a way that can store more than 60 characters (255 is the recomended width).</p>
 * @link http://php.net/manual/en/password.constants.php
 */
define ('PASSWORD_DEFAULT', 1);

/**
 * (PHP 5 >= 5.5.0)<br/>
 * <p>Returns information about the given hash</p>
 * <p>When passed in a valid hash created by an algorithm supported by {@see password_hash()}, this function will return an array of information about that hash.</p>
 * @param string $hash A hash created by {@see password_hash()}.
 * @return array Returns an associative array with three elements:
 * <ul>
 * <li><i>algo</i>, which will match a {@link http://php.net/manual/en/password.constants.php password algorithm constant}</li>
 * <li><i>algoName</i>, which has the human readable name of the algorithm</li>
 * <li><i>options</i>, which includes the options provided when calling {@see password_hash()}</li>
 * </li>
 */
function password_get_info ($hash) {}

/**
 * (PHP 5 >= 5.5.0)<br/>
 * <p>Creates a password hash</p>
 * @param string $password The user's password.
 * @param integer $algo A password algorithm constant denoting the algorithm to use when hashing the password.
 * @param array $options [optional]
 * <p>An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.</p>
 * <p>If omitted, a random salt will be created and the default cost will be used.</p>
 * @return string|boolean Returns the hashed password, or <code>FALSE</code> on failure.
 */
function password_hash ($password, $algo, array $options = null) {}

/**
 * (PHP 5 >= 5.5.0)<br/>
 * <p>Checks if the given hash matches the given options</p>
 */
function password_needs_rehash ($hash, $algo, array $options = null) {}

/**
 * Verifies that the given hash matches the given password.
 *
 * Note that {@see password_hash()} returns the algorithm, cost and salt as part of the returned hash. Therefore, all
 * information that's needed to verify the hash is included in it. This allows the verify function to verify the hash
 * without needing separate storage for the salt or algorithm information.
 *
 * @link http://php.net/function.password-verify.php
 * @param string $password The user's password
 * @param string $hash     A hash created with {@see password_hash()}
 * @return boolean         Returns <code>TRUE</code> if the password and hash match, or <code>FALSE</code> otherwise.
 * @since 5.5.0
 */
function password_verify($password, $hash) {}